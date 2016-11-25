<?php

namespace app\controllers;

use app\models\Basket;
use app\models\BookingImages;
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
                            'addbook',
                        ],
                        'allow' => true,
                        'roles' => ['GodMode', 'admin', 'operator','supplier'],
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

    public function actionAddbook($booking_id)
    {
        $user = Yii::$app->user->identity->getId();
        if(!empty($user) && !empty($booking_id)){
            $basket = new Basket();
            $basket->user_id = Yii::$app->user->identity->getId();
            $basket->booking_id = $booking_id;
            $basket->status=1;

            if($basket->save())
                return true;
            else
                return json_encode($basket->errors);
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

        $model_file = new File();
        $model = Booking::find()->where('id = '.$id)->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'model_file' => $model_file,
                'types' => $types,
                'cities' => $cities,
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
