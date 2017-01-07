<?php

namespace app\controllers;

use app\models\TypesImages;
use Yii;
use app\models\types;
use app\models\TypesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\File;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
/**
 * TypesController implements the CRUD actions for types model.
 */
class TypesController extends BackendController
{
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
                            'get-tags-list',
                            'add-new-tag',
                            'add-book-links',
                            'del-book-links',
                            'add-type-links',
                            'del-type-links',
                            'del-type-image',
                            'add-main-type-image-status',
                        ],
                        'allow' => true,
                        'roles' => ['GodMode', 'admin', 'operator','supplier'],
                    ],
                    [
                        'actions' => [
                            'types-view',
                            //'addwish',
                        ],
                        'allow' => true,
                        'roles' => ['?', '@'],
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

            $type = new TypesImages();
            $type->status=1;
            $type->path=$str;
            $type->type_id=$model_id;
            $type->save();
            return true;
        }
        return false;
    }


    public function actionDelTypeImage($image_id = null)
    {
        if(!empty($image_id)) {
            $typeImages = TypesImages::find()
                ->where('id = '.$image_id)->one();
            $typeImages->status=0;
            if($typeImages->save()) {
                return true;
            }else {
                return json_encode($typeImages->errors);
            }
        }
        return false;
    }


    public function actionAddMainTypeImageStatus($type_id = null, $image_id = null)
    {
        if(!empty($image_id) && !empty($type_id)) {
            $typeImages = TypesImages::find()
                ->where('type_id = '.$type_id)->all();

            foreach ($typeImages as $typeImage) {
                $typeImage->main=0;
                $typeImage->save();
            }

            $typeImages = TypesImages::find()
                ->where('type_id = '.$type_id)
                ->andWhere('id = '.$image_id)->one();
            $typeImages->main=1;
            $typeImages->status=1;

            if($typeImages->save()) {
                return true;
            }else {
                return json_encode($typeImages->errors);
            }
        }
        return false;
    }

    /**
     * Lists all types models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TypesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Country model.
     * @param integer $id
     * @return mixed
     */
    public function actionTypesView($id)
    {
        $this->layout = 'main';
        return $this->render('types-view', [
            'model' => $this->findModel($id),
            //'id' => $id,
        ]);
    }

    /**
     * Displays a single types model.
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
     * Creates a new types model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new types();
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
     * Updates an existing types model.
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
     * Deletes an existing types model.
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
     * Finds the types model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return types the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = types::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
