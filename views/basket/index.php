<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BasketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Baskets');
$this->params['breadcrumbs'][] = $this->title;
?>
<p class="basket-index">
    <div class="container">
        <BR><BR><BR>

    <h1>Your Basket</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //= Html::a(Yii::t('app', 'Create Basket'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
      //  'filterModel' => $searchModel,
        'layout'=>"{items}",
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'user_id',
            [
              'attribute' => 'booking_id',
              'label' => 'Items',
              'content'=>function($data){
                  $booking = \app\models\Booking::find()->where('id = '.$data['booking_id'])->one();
                  return \app\widgets\WBasketItem::widget(['model' => $booking]);

              }

            ],
           // ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Действия',
                'headerOptions' => ['width' => '80'],
                'template' => '{delete}',
                'buttons' => [
                    'view' => function ($url,$model) {
                        return
                            Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                    'method' => 'post',
                                ],
                            ]);
                            //Html::a('<span class="glyphicon glyphicon-trash"></span>','delete?id='.$model->id);
                    },
                ],

            ],

        ],
    ]); ?>

<p>
    <?= Html::a(Yii::t('app', 'Перейти к оплате'), ['payment'], ['class' => 'btn btn-success']) ?>
</p>

    </div>

</div>
