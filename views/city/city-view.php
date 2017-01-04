<?php

\app\libs\Language::select();


use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = "About ".$model->name;
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Countries'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container margin_60">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-3 col-md-3">
            <?= \app\widgets\WLeftMenu::widget();  ?>
            <div class="box_style_2 hidden">
                <i class="icon_set_1_icon-57"></i>
                <h4>Need <span>Help?</span></h4>
                <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                <small>Monday to Friday 9.00am - 7.30pm</small>
            </div>
        </div><!--End aside -->
        <div class="col-lg-9 col-md-9">
            <?= \app\widgets\WTools::widget();  ?>
            <?php
            //output images
            if(!empty($model->id)) {
                $images = \app\models\CountryImages::find()->where('country_id = ' . $model->id)->all();
                // Подключаем виджет список;
                print \app\widgets\WToursList::widget(['model' => $model,'images'=>$images]);
            }
            ?>
            <hr>
        </div><!-- End col lg-9 -->
        <div class="clear"></div>
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
            <hr>

    </div><!-- End row -->
</div>