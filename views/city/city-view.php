<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = "About ".$model->name;
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Countries'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php

    //output images
    if(!empty($model->id)) {
        $images = \app\models\CityImages::find()->where('city_id = ' . $model->id)->all();
        if (!empty($images)) {
            ?>

            <?php

            foreach ($images as $item) {
                echo "<img src='/" . $item->path . "' width=250 id='"
                    . $item->id
                    . "'>";
            }
        }
    }

    ?>

    <h3>Summary</h3>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //   'id',
            'name',
            'description:raw',
            'full_description:raw',
           // 'options:ntext',
            // 'status',
        ],
    ]) ?>

    <h2 class="title-main text-center">Tours in <?=$model->name?></h2>
    <div class="container md">
        <div class="masonry grid__m ">

        <?php
            $booking = \app\models\Booking::find()->where('status = 1')->andWhere('city_id = '.$model->id)->all();
            foreach($booking as $item){
                echo \app\widgets\WBooking::widget([
                    'model' => $item,
                ]);
            }

    ?>
    </div>
    </div>

</div>
