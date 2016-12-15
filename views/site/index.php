<?php
/*VER 1.0.1*/
/* @var $this yii\web\View */
$this->title = 'TourBook.Biz';

$lang = \Yii::$app->session->get("locale");
if(!empty($lang))
    \Yii::$app->language=$lang;
else
{
    if(!\Yii::$app->user->isGuest)
    {
        $user_id = \Yii::$app->user->identity->getId();
        $user = \app\models\User::find()->where('id = '.$user_id)->one();
        \Yii::$app->language=$user->locale;
    }
}


?>
<div id="main">
    <div class="search">
        <form method="post">
            <div class="input-group search-group col-xs-11 col-sm-9 col-md-8">
                <h1 class="title-main"><?=\Yii::t('app','Search for sightseeing')?></h1>
                <input type="text" class="form-control search"  value="" placeholder="<?=\Yii::t('app','The easiest way to search and to book your vacation for all over the world')?>" name="search">
                            <span class="input-group-btn">
                                <button type="button" class="btn blue "><?=\Yii::t('app','Search')?></button>
                            </span>
                <div class="prompt">
                   <div class="panel-block">
                      <div class="col-xs-3 title-main"><?=\Yii::t('app','Destination')?></div>
                       <div class="col-xs-9"><?=\Yii::t('app','Name')?></div>
                       <div class="clear"></div>
                   </div>

                    <table class="table-search">
                        <tbody>

                        <?php

                        $countries = \app\models\Country::find()->where('status = 1')->all();
                        if(!empty($countries)){
                            foreach ($countries as $country) {

                            $cities = \app\models\City::find()->where('country_id = '.$country->id)->andWhere('status = 1')->all();

                            if(!empty($cities))
                                echo "<tr>\n\t<td><span class='name'><a href='/country/country-view?id=".$country->id."'>".$country->name."</a></span></td>\n";
                                echo "\n<td>";

                                foreach ($cities as $city) {
                                   echo "<span class='name'><a class='name-a' href='/city/city-view?id=".$city->id."'>".$city->name."</a></span>\n";
                                }

                                echo "</td>\n";
                                echo "</tr>\n";
                            }
                        }

                        ?>

                        </tbody>
                        </table>
                </div>
            </div><!-- /input-group -->

        </form>
        <div class="slider">
            <div class="items">
                <div class="item"><img src="/files/slider/slider1.png" alt="" class="rad" /> </div>
                <div class="item"><img src="/files/slider/slider2.png" alt="" class="rad" /> </div>
                <div class="item"><img src="/files/slider/slider3.png" alt="" class="rad" /> </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="br-hr hidden-xs"></div>


    <h2 class="title-main text-center">ПОПУЛЯРНЫЕ ГОРОДА</h2>
    <div class="container md">

        <?php
        $country = \app\models\City::find()->where('status = 1')->limit(9)->all();
        foreach($country as $item){
            echo \app\widgets\WCity::widget([
                'model' => $item,
            ]);
        }

        ?>


        <div class="clear"></div>
    </div>

    <h2 class="title-main text-center">ПОПУЛЯРНЫЕ СТРАНЫ</h2>
    <div class="container md">

        <?php
            $country = \app\models\Country::find()->where('status = 1')->limit(6)->all();
            foreach($country as $item){
                echo \app\widgets\WCountry::widget([
                    'model' => $item,
                ]);
            }

        ?>


        <div class="clear"></div>
    </div>

   <h2 class="title-main text-center">РЕКОМЕНДУЕМЫЕ</h2>
    <div class="container md">
        <div class="masonry grid__m ">

            <?php
            $booking = \app\models\Booking::find()->where('status = 1')->limit(6)->all();
            foreach($booking as $item){
                echo \app\widgets\WBooking::widget([
                    'model' => $item,
                ]);
            }

            ?>

        </div>
        <div class="clear"></div>
    </div>

    <div class="container md">

        <div class="col-xs-12 col-sm-4 info-box">
            <div class="info br">
                <div class="icon-fast icon"></div>
                <div class="text-min">Мгновеное подтверждения брони</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 info-box ">
            <div class="info pay">
                <div class="icon-sec icon"></div>
                <div class="text-min">О безопасности платежей</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 info-box">
            <div class="info br margin-right">
                <div class="icon-pay icon"></div>
                <div class="text-min">О гарантии лучшей цены</div>
            </div>
        </div>
    </div>
    <div class="clear"></div>

</div>
