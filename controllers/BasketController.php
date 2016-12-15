<?php

namespace app\controllers;

use Yii;
use app\models\basket;
use app\models\BasketSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * BasketController implements the CRUD actions for basket model.
 */
class BasketController extends Controller
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
                        ],
                        'allow' => true,
                        'roles' => ['GodMode', 'admin', 'operator','supplier'],
                    ],

                    [
                        'actions' => [
                            'index',
                            'delete',
                            'payment',
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

    /**
     * Lists all basket models.
     * @return mixed
     */
    public function actionIndex()
    {
        $user = Yii::$app->user->identity->getId();

        if(!empty($user)) {
            $searchModel = new BasketSearch();
            $dataProvider = $searchModel->searchActiveBasket(
                Yii::$app->request->queryParams
            );

            return $this->render(
                'index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]
            );
        }
        else
            return $this->render('empty');
    }

    /**
     * Displays a single basket model.
     * @param integer $id
     * @return mixed
     */
    public function actionPayment($basket_id = null)
    {
        return $this->render('payment', [
           // 'model' => $this->findModel($basket_id),
        ]);
    }

    /**
     * Displays a single basket model.
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
     * Creates a new basket model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new basket();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing basket model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing basket model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->status = 0;//->delete();
        $model->save();

        return $this->redirect(['index']);
    }

    /**
     * Finds the basket model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return basket the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = basket::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
