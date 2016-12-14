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
        $images = \app\models\CountryImages::find()->where('country_id = ' . $model->id)->all();
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
            'options:ntext',
           // 'status',
        ],
    ]) ?>

</div>

<div class="country-view">

    <?php
        $cities = \app\models\City::find()->where('country_id = '.$model->id)->andWhere('status = 1')->all();
        foreach ($cities as $item) {
    ?>
        <h2><?=$item->name?></h2>
    <?php

    //output images
    if(!empty($item->id)) {
        $images = \app\models\CityImages::find()->where('city_id = ' . $item->id)->all();
        if (!empty($images)) {
            ?>

            <?php

            foreach ($images as $items) {
                echo "<img src='/" . $items->path . "' width=250 id='"
                    . $items->id
                    . "'>";
            }
        }
    }

    ?>

    <?= DetailView::widget([
        'model' => $item,
        'attributes' => [
            //   'id',
            'name',
            'description:raw',
            'full_description:raw',
            // 'options:ntext',
            // 'status',
        ],
    ]) ?>

        <h3>Tours in <?=$item->name?></h3>

    <div class="container md">
        <div class="masonry grid__m ">

            <?php
            $booking = \app\models\Booking::find()->where('status = 1')->andWhere('city_id = '.$item->id)->all();
            foreach($booking as $items){
                echo \app\widgets\WBooking::widget([
                    'model' => $items,
                ]);
            }

            ?>
        </div>
    </div>

    <?php } ?>

</div>

