<?php

namespace app\controllers;

use app\models\TagsImages;
use app\models\TagsLinks;
use app\models\TypesLinks;
use Yii;
use app\models\Tags;
use app\models\TagsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Types;
use app\models\File;
use yii\web\UploadedFile;
use app\models\TagsNoLinks;

/**
 * TagsController implements the CRUD actions for Tags model.
 */
class TagsController extends BackendController
{
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
                            'get-tags-list',
                            'add-new-tag',
                            'add-book-links',
                            'del-book-links',
                            'add-book-no-links',
                            'del-book-no-links',
                            'add-type-links',
                            'del-type-links',
                            'del-tag-image',
                            'add-main-tag-image-status',
                        ],
                        'allow' => true,
                        'roles' => ['GodMode', 'admin', 'operator','supplier'],
                    ],
                ],
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //  'delete' => ['GET'],
                ],
            ],
        ];
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

            $tags = new TagsImages();
            $tags->status=1;
            $tags->path=$str;
            $tags->tag_id=$model_id;

            if($tags->save()) {
                return true;
            }else {

                var_dump($tags->errors);die();

                return json_encode($tags->errors);
            }
            //return true;
        }
        return false;
    }


    public function actionDelTagImage($image_id = null)
    {
        if(!empty($image_id)) {
            $tagsImages = TagsImages::find()
                ->where('id = '.$image_id)->one();
            $tagsImages->status=0;
            if($tagsImages->save()) {
                return true;
            }else {
                return json_encode($tagsImages->errors);
            }
        }
        return false;
    }


    public function actionAddMainTagImageStatus($tag_id = null, $image_id = null)
    {
        if(!empty($image_id) && !empty($tag_id)) {
            $tagsImages = TagsImages::find()
                ->where('tag_id = '.$tag_id)->all();

            foreach ($tagsImages as $tagsImage) {
                $tagsImage->main=0;
                $tagsImage->save();
            }

            $tagsImages = TagsImages::find()
                ->where('tag_id = '.$tag_id)
                ->andWhere('id = '.$image_id)->one();
            $tagsImages->main=1;
            $tagsImages->status=1;

            if($tagsImages->save()) {
                return true;
            }else {
                return json_encode($tagsImages->errors);
            }
        }
        return false;
    }
    

    //AJAX
    
    
    /**
     * @return Action
     */
    public function actionAddNewTag($tag_name = null)
    {
        if(!empty($tag_name)){
            $tag = new Tags();
            $tag->name = $tag_name;
            $tag->status = 1;
            if($tag->save())
                return true;
            else
                return json_encode($tag->errors);
        }
        return false;
    }



    public function actionDelBookNoLinks($tag_name=null, $booking_id = null)
    {
        if(!empty($tag_name) && !empty($booking_id))
        {
            $tag_IDs = Tags::find()
                ->andFilterWhere(['like','name',$tag_name])
                //->where('name = '.$tag_name)
                ->all();

            //var_dump($tag_IDs);

            //return json_encode($tag_IDs);

            if(!empty($tag_IDs)){
                foreach ($tag_IDs as $tag_id) {

                    $tagsLinks = TagsNoLinks::find()
                        ->where('tag_id = '.$tag_id->id)
                        ->andWhere('booking_id = '.$booking_id)
                        ->andWhere('status = 1')->all();

                    foreach ($tagsLinks as $item) {
                        $item->status=0;
                        $item->save();
                    }

                    return true;
                }
            }
        }
        return false;
    }


    public function actionAddBookNoLinks($tag_id=null, $booking_id = null)
    {
        if(!empty($tag_id) && !empty($booking_id))
        {
            $tagsLinks = new TagsNoLinks();
            $tagsLinks->tag_id=$tag_id;
            $tagsLinks->booking_id=$booking_id;
            $tagsLinks->status=1;
            if($tagsLinks->save())
                return true;
            else
                return json_encode($tagsLinks->errors);
        }
        return false;
    }


    public function actionDelBookLinks($tag_name=null, $booking_id = null)
    {
        if(!empty($tag_name) && !empty($booking_id))
        {
            $tag_IDs = Tags::find()
                ->andFilterWhere(['like','name',$tag_name])
                //->where('name = '.$tag_name)
                ->all();

            //var_dump($tag_IDs);

            //return json_encode($tag_IDs);

            if(!empty($tag_IDs)){
                foreach ($tag_IDs as $tag_id) {

                    $tagsLinks = TagsLinks::find()
                        ->where('tag_id = '.$tag_id->id)
                        ->andWhere('booking_id = '.$booking_id)
                        ->andWhere('status = 1')->all();

                    foreach ($tagsLinks as $item) {
                        $item->status=0;
                        $item->save();
                    }

                    return true;
                }
            }
        }
        return false;
    }


    public function actionAddBookLinks($tag_id=null, $booking_id = null)
    {
        if(!empty($tag_id) && !empty($booking_id))
        {
            $tagsLinks = new TagsLinks();
            $tagsLinks->tag_id=$tag_id;
            $tagsLinks->booking_id=$booking_id;
            $tagsLinks->status=1;
            if($tagsLinks->save())
                return true;
            else
                return json_encode($tagsLinks->errors);
        }
        return false;
    }

    public function actionDelTypeLinks($tag_name=null, $type_id = null)
    {
        if(!empty($tag_name) && !empty($type_id))
        {
            $tag_IDs = Tags::find()
                ->andFilterWhere(['like','name',$tag_name])
                //->where('name = '.$tag_name)
                ->all();

            //var_dump($tag_IDs);

            //return json_encode($tag_IDs);

            if(!empty($tag_IDs)){
                foreach ($tag_IDs as $tag_id) {

                    $typesLinks = TypesLinks::find()
                        ->where('tag_id = '.$tag_id->id)
                        ->andWhere('type_id = '.$type_id)
                        ->andWhere('status = 1')->all();

                    foreach ($typesLinks as $item) {
                        $item->status=0;
                        $item->save();
                    }

                    return true;
                }
            }
        }
        return false;
    }


    public function actionAddTypeLinks($tag_id=null, $type_id = null)
    {
        if(!empty($tag_id) && !empty($type_id))
        {
            $typesLinks = new TypesLinks();
            $typesLinks->tag_id=$tag_id;
            $typesLinks->type_id=$type_id;
            $typesLinks->status=1;

            if($typesLinks->save())
                return true;
            else
                return json_encode($typesLinks->errors);
        }
        return false;
    }

    public function actionGetTagsList($q = null, $id = null){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!is_null($q)) {

            $data = Tags::find()->select('id, name AS text')
                ->andWhere('status = 1')
                ->andFilterWhere(['like','name',$q])
                ->asArray()->limit(20)->all();

            $out['results'] = array_values($data);
        }
        elseif ($id > 0) {
            $out['results'] = ['id' => $id, 'text' => Tags::find($id)->name];
        }
        return $out;
    }


    /**
     * Lists all Tags models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TagsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tags model.
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
     * Creates a new Tags model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tags();
        $model_file = new File();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'model_file' => $model_file,
            ]);
        }
    }

    /**
     * Updates an existing Tags model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model_file = new File();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            
            
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'model_file' => $model_file,
            ]);
        }
    }

    /**
     * Deletes an existing Tags model.
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
     * Finds the Tags model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tags the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tags::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
