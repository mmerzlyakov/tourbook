<?php

namespace app\controllers;

use app\models\Basket;
use app\models\BookingImages;
use app\models\TagsLinks;
use app\models\WishList;
use Yii;
use app\models\Booking;
use app\models\BookingSearch;
use app\models\File;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\controllers\BackendController;
use yii\helpers\Url;
use yii\web\UploadedFile;

/**
 * BookingController implements the CRUD actions for Booking model.
 */
class BookingController extends BackendController
{

  //  public $layout = 'admin';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'index',
                            'update',
                            'create',
                            'view',
                            'delete',
                            'upload',
                            'add-main-image-status',
                            'del-booking-image',
                        ],
                        'allow' => true,
                        'roles' => ['GodMode', 'admin', 'operator','supplier'],
                    ],
                    [
                        'actions' => [
                            'addbook',
                            'addwish',
                        ],
                        'allow' => true,
                        'roles' => ['GodMode','user', 'admin', 'operator','supplier'],
                    ],
                ],
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionDelBookingImage($image_id = null)
    {
        if(!empty($image_id)) {
            $bookingImages = BookingImages::find()
                ->where('id = '.$image_id)->one();
            $bookingImages->status=0;
            if($bookingImages->save()) {
                return true;
            }else {
                return json_encode($bookingImages->errors);
            }
        }
        return false;
    }


    public function actionAddMainImageStatus($booking_id = null, $image_id = null)
    {
        if(!empty($image_id) && !empty($booking_id)) {
            $bookingImages = BookingImages::find()
                ->where('booking_id = '.$booking_id)->all();

            foreach ($bookingImages as $bookingImage) {
                $bookingImage->main=0;
                $bookingImage->save();
            }

            $bookingImages = BookingImages::find()
                ->where('booking_id = '.$booking_id)
                ->andWhere('id = '.$image_id)->one();
            $bookingImages->main=1;
            $bookingImages->status=1;

            if($bookingImages->save()) {
                return true;
            }else {
                return json_encode($bookingImages->errors);
            }
        }
        return false;
    }

    //AJAX

    public function actionAddbook($booking_id)
    {
        $user = Yii::$app->user->identity->getId();
        if(!empty($user) && !empty($booking_id)){
            $basket = new Basket();
            $basket->user_id = Yii::$app->user->identity->getId();
            $basket->booking_id = $booking_id;
            $basket->status=1;

            if($basket->save()) {
                //return true;

                $currentBasket = Basket::find()->where('user_id = '.$basket->user_id)
                                                ->andWhere('status = 1')->all();

                //var_dump($currentBasket);die();

                $currentBasketData="";
                $currentBasketAmount=0;

                foreach ($currentBasket as $item) {
                    $booking = Booking::find()->where('id = '.$item->booking_id)->one();

                    //var_dump($booking);die();

                    $currentBasketData.=$booking->name;
                    $currentBasketData.=" (".$booking->price."$)<br>";
                    $currentBasketAmount+=$booking->price;
                }

                $currentBasketData.="<br> Amount: ".$currentBasketAmount."<br>";

                //$booking = Booking::find()->where('id = '.$booking_id)->one();
                return json_encode($currentBasketData);
            }else {
                return json_encode($basket->errors);
            }
        }
        else return false;

    }


    //AJAX
    public function actionAddwish($booking_id)
    {
        $user = Yii::$app->user->identity->getId();
        if(!empty($user) && !empty($booking_id)){
            $wish = new WishList();
            $wish->user_id = Yii::$app->user->identity->getId();
            $wish->wish = $booking_id;
            $wish->status=1;

            if($wish->save()) {
                return true;
            }else {
                return json_encode($wish->errors);
            }
        }
        else return false;
    }

    /**
     * Lists all Booking models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Booking model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Booking model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $types = \app\models\Types::find()->select('id, name, description')->where('id > 0')->all();
        $cities = \app\models\City::find()->select('id, name, description')->where('id > 0')->all();

        $model_file = new File();
        $model = new Booking();

        $tagsList = []; //new TagsLinks();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return
                    $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'model_file' => $model_file,
                'types' => $types,
                'cities' => $cities,
            ]);
        }
    }


    public function actionUpload($model_id)
    {
        $model = new File();
        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstances($model, 'imageFile');
            $path = $model->upload($model_id);

            $str = str_replace('\\','',$path);
            $str = str_replace('[','',$str);
            $str = str_replace('"','',$str);
            $str = str_replace(']','',$str);

            $book = new BookingImages();
            $book->status=1;
            $book->path=$str;
            $book->booking_id=$model_id;
            $book->save();
            return true;
        }
        return false;
    }


/*public function actionUpload($model_id)
{
    $model = new BookingImages();
    if (Yii::$app->request->isPost) {
        $model->imageFile = UploadedFile::getInstances($model, 'imageFile');
        $model->path = $model->upload($model_id);
        //if($model->save()) {
        //     var_dump($model->errors);
        // file is uploaded successfully
        return true;
        // }
    }
    return false;
}*/


    /**
     * Updates an existing Booking model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $types = \app\models\Types::find()->select('id, name, description')->where('id > 0')->all();
        $cities = \app\models\City::find()->select('id, name, description')->where('id > 0')->all();
        //$tagsList = TagsLinks::find()->where('booking_id = '.$model->id)->all();

        $model_file = new File();
        $model = Booking::find()->where('id = '.$id)->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            //var_dump($model);die();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'model_file' => $model_file,
                'types' => $types,
                'cities' => $cities,
                //'tagsList' => $tagsList,
            ]);
        }
    }

    /**
     * Deletes an existing Booking model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Booking model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Booking the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Booking::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
