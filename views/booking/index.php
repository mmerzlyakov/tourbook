<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Bookings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Booking'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'description:raw',
            'type_id',
            'price',
            // 'options',
            // 'images',
            [
              'attribute' => 'status',
              'content' => function($data){
                  return ($data['status']==1) ? 'Active' : 'Not active';
              },
            ],
            [
                'attribute' => 'status',
                'label' => 'Photos',
                'content' => function($model)
                {
                    $str = "";
                    if(!empty($model->id)) {
                        $images = \app\models\BookingImages::find()->where('booking_id = ' . $model->id)->andWhere('status = 1')->all();
                        if (!empty($images)) {
                            foreach ($images as $item) {
                               $str.="<img src='/" . $item->path . "' width=80 id='"
                                    . $item->id
                                    . "'>";
                            }
                        }
                    }
                    return $str;
                },

            ],
            // 'bonus',
            // 'discount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
