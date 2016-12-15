<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bookings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-view">

    <h1>Preview: <?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'id',
                'format' => 'raw',
                'value'=>'<a href=/site/booking?id='.$model->id.'>https://extremeshop.ru/site/booking?id='.$model->id.'</a>',
            ],
//            'name',
            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => $model->name,
            ],
            [
                'attribute' => 'description',
                'format' => 'raw',
                'value' => $model->description,
            ],
//            'description',

            'type_id',
            'price',
            'options',
            'images',
            'status',
            'bonus',
            'discount',
        ],
    ]) ?>

</div>
