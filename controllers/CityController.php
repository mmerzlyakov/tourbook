<?php

namespace app\controllers;

use Yii;
use app\models\City;
use app\models\CitySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CityController implements the CRUD actions for City model.
 */
class CityController extends BackendController
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
                        ],
                        'allow' => true,
                        'roles' => ['GodMode', 'admins', 'operators'],
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

    /**
     * Lists all City models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single City model.
     * @param integer $id
     * @param integer $country_id
     * @return mixed
     */
    public function actionView($id, $country_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $country_id),
        ]);
    }

    /**
     * Creates a new City model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new City();
        $countries = \app\models\Country::find()->where('status = 1')->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'country_id' => $model->country_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'countries' => $countries,
            ]);
        }
    }

    /**
     * Updates an existing City model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $country_id
     * @return mixed
     */
    public function actionUpdate($id, $country_id)
    {
        $model = $this->findModel($id, $country_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'country_id' => $model->country_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing City model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $country_id
     * @return mixed
     */
    public function actionDelete($id, $country_id)
    {
        $this->findModel($id, $country_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the City model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $country_id
     * @return City the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $country_id)
    {
        if (($model = City::findOne(['id' => $id, 'country_id' => $country_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
