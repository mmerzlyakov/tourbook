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
            <div class="box_style_cat">
                <ul id="cat_nav">
                    <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>All tours <span>(141)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-3"></i>City sightseeing <span>(20)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-4"></i>Museum tours <span>(16)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-44"></i>Historic Buildings <span>(12)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-37"></i>Walking tours <span>(11)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-14"></i>Eat & Drink <span>(20)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-43"></i>Churces <span>(08)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-28"></i>Skyline tours <span>(11)</span></a></li>
                </ul>
            </div>
            <div class="box_style_2">
                <i class="icon_set_1_icon-57"></i>
                <h4>Need <span>Help?</span></h4>
                <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                <small>Monday to Friday 9.00am - 7.30pm</small>
            </div>
        </div><!--End aside -->
        <div class="col-lg-9 col-md-9">
            <div id="tools">

                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="styled-select-filters">
                            <select name="sort_price" id="sort_price">
                                <option value="" selected>Sort by price</option>
                                <option value="lower">Lowest price</option>
                                <option value="higher">Highest price</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="styled-select-filters">
                            <select  name="sort_rating" id="sort_rating">
                                <option value="" selected>Sort by ranking</option>
                                <option value="lower">Lowest ranking</option>
                                <option value="higher">Highest ranking</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 hidden-xs text-right"></div>

                </div>
            </div><!--/tools -->
        <?php
            //output images
            if(!empty($model->id)) {
                 $images = \app\models\CountryImages::find()->where('country_id = ' . $model->id)->all();
                 // Подключаем виджет список;
                 print \app\widgets\WToursList::widget(['model' => $model,'images'=>$images]);
            }
            ?>

            <?php
        $cities = \app\models\City::find()->where('country_id = '.$model->id)->andWhere('status = 1')->all();
        foreach ($cities as $item) { ?>
            <?php

            //output images
            if(!empty($item->id)) {
                $images = \app\models\CityImages::find()->where('city_id = ' . $item->id)->all();
                print \app\widgets\WToursList::widget(['model' => $item,'images'=>$images]);
            }
        }?>
            <hr>
        </div><!-- End col lg-9 -->
    </div><!-- End row -->
</div>



