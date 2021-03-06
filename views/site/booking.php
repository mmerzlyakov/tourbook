<?php
/**
 * Created by PhpStorm.
 * User: Strogg
 * Date: 17.11.2016
 * Time: 7:38
 */

?>
<div id="private-tour">
    <div class="booking-button-m"><div class="glyphicon glyphicon-plane"></div><div class="name">Booking</div></div>

    <div class="parallax-window" data-parallax="scroll" data-image-src="/files/gallery/admin_top.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1><?=$model->name?></h1>
                        <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main">
                            from/per person <span><sup>$</sup>52</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End section -->
    <div class="breadcrumb-content">
        <div class="container">
            <ol class="breadcrumb">
                <li class="icon-balun"><a href="#">Главная</a></li>
                <li><a href="#">Библиотека</a></li>
                <li>Данные</li>
            </ol>
        </div>
    </div>
    <div id="map"></div>
    <div class="container">


        <?php if(Yii::$app->user->can('GodMode')){ ?>

        <h2><a href="/booking/update?id=<?=$model->id?>">EDIT</a></h2>

        <?php } ?>

        <div class="col-xs-12 col-md-8">
            <div id="single_tour_feat">
                <ul>
                    <li><i class="icon_set_1_icon-4"></i>Museum</li>
                    <li><i class="icon_set_1_icon-83"></i>3 Hours</li>
                    <li><i class="icon_set_1_icon-13"></i>Hours</li>
                    <li><i class="icon_set_1_icon-82"></i>144 Likes</li>
                    <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                    <li><i class="icon_set_1_icon-97"></i>Audio guide</li>
                    <li><i class="icon_set_1_icon-29"></i>Tour guide</li>
                </ul>
            </div>
            <div class="text">
                <?=$model->description?>
            </div>


            <div class="info-text">
            <ul>
            <?php
            $tags = \app\models\Tags::find()
                    ->select('tags.*, tags_links.*')
                    ->leftJoin('tags_links','tags.id = tags_links.tag_id')
                    ->where('booking_id = '.$model->id)
                    ->andWhere('tags.status = 1')
                    ->andWhere('tags_links.status = 1')
                    ->all();
//            var_dump($tags);die();
            foreach ($tags as $item) {
            ?>
                <li><?=$item->name?></li>

            <?php } ?>
            </ul></div>

            <div class="info-text">
                <ul class="list_ok">
                    <li>Советы:<br>
                        <small>Вы можете найти бесплатный WiFi доступный у входа в Сингапурский зоопарк</small></li>
                    <li>Дополнительная информация:<br>
                        <small>Примечание: Эта деятельность может быть забронирован только иностранных граждан<br>
                            Детский билет: Возраст 3-12<br>
                            Бесплатный Wi-Fi предоставляется на всей территории всего парка</small></li>
                    <li>Подтверждение:<br>
                        <small>Вы получите подтверждение по электронной почте и билет сразу после бронирования.<br>
                            В том случае, если вы не получите по электронной почте от нас, пожалуйста, проверьте папку со спамом или сообщите нам по электронной почте</small></li>
                    <li>Отмена Брони:<br>
                        <small>по электронной почте</small></li>
                </ul>
            </div>
            <h3 class="title text-center">Отзывы (3 отзыва)</h3>
            <div class="comments">


                <?php

                $feedback = \app\models\Feedback::find()->where('booking_id = '.$model->id)->all();


                if(!empty($feedback)){

                    foreach ($feedback as $item) {

                        $user = \app\models\Users::find()->where('id = '.$item->user_id)->one();
                ?>

                <div class="item">
                    <div class="ava"><img src="/images/avatar.png" ><div class="name"><?=$user->name?></div> <span class="data"><?=$item->date?></span></div>
                    <div class="text-min"><?=$item->description?></div>
                    <div class="rating"><?=$item->rate?></div>
                </div>

                <?php } } else { ?>

                    No feedback is found yet!

                <?php } ?>
                <!-- div class="item">
                    <div class="ava"><img src="/images/avatar.png" ><div class="name">Хрюндель</div> <span class="data">2016-10-26</span></div>
                    <div class="text-min">Зоопарк ежегодно посещает около 1,6 миллиона посетителей.С самого начала своей работы Сингапурский зоопарк следовал</div>
                    <div class="rating"><div class="rating-icon rating-1"></div></div>
                </div>
                <div class="item">
                    <div class="ava"><img src="/images/avatar.png" ><div class="name">Хрюндель</div> <span class="data">2016-10-26</span></div>
                    <div class="text-min">Зоопарк ежегодно посещает около 1,6 миллиона посетителей.С самого начала своей работы Сингапурский зоопарк следовал</div>
                    <div class="rating"><div class="rating-icon rating-3"></div></div>
                </div -->


            </div>
        </div>
        <div class="col-xs-12 col-md-4 sidebar ">
            <button type="button" class="close" aria-hidden="true">&times;</button>
            <h4 class="oran">Стоимость:</h4>
            <div class="price"><b>взрослый - <?=$model->price?></b></div>
            <div class="price"><b>дестский - <?=$model->price_child?></b></div>
            <div class="sh">дети до <?=$model->child_before?> лет бесплатно</div>
            <p class="hidden-sm hidden-xs">
                <a class="btn_map collapsed" href="/" onclick="return false">View on map</a>
            </p>
            <!--Бронь-->
            <div class="booking">
                <div class="title">-Booking-</div>

                <div class="form-group col-xs-6 date">
                    <label class="name"><span class="glyphicon glyphicon-calendar"></span> Select Date</label>
                    <input class="form-control input-sm" type="text" name="date" value="2016-06-01"/>
                </div>
                <div class="form-group col-xs-6 time">
                    <label class="name"><span class="glyphicon glyphicon-time"></span> Time</label>
                    <input class="form-control input-sm" type="text" name="date" value="20:00"/>
                </div>
                <div class="clear"></div>
                <div class="counts__m col-xs-6">
                    <div class="label">Abults</div>
                    <div class="counts">
                        <div class="plus">+</div>
                        <input type="text" value="0" class="count" name="count" maxlength="2"/>
                        <div class="minus">-</div>
                    </div>
                </div>
                <div class="counts__m col-xs-6">
                    <div class="label">Children</div>
                    <div class="counts">
                        <div class="plus">+</div>
                        <input type="text" value="0" class="count" name="count" maxlength="2"/>
                        <div class="minus">-</div>
                    </div>
                </div>
                <div class="clear"></div>
                <table class="total">
                    <tr><td>Abults</td><td><div class="number">3</div></td></tr>
                    <tr><td>Children</td><td><div class="number">3</div></td></tr>
                    <tr><td>Total amount</td><td><div class="money">23 $</div></td></tr>
                    <tr class="money-total"><td>TOTAL COST</td><td><div class="money">123 $</div></td></tr>
                </table>
                <div class="button"><input id="BOOKNOW" class="btn btn-warning" type="submit" value="BOOK NOW" onClick=""/>
                    <input id="BOOKID" class="btn btn-warning" type="hidden" value="<?=$model->id?>" onClick=""/></div>

                <!-- AJAX action@script.js click booknow -->
                <div class="button"><button type="button" id="MAKEWISH" class="btn btn-grey"><span class="glyphicon glyphicon-heart"></span>ADD TO WHISLIST</button></div>
                <div class="clear"></div>
            </div>  <!--./Бронь-->
            <div class="contact">
                <div class="icon-phone"></div>
                <div class="text-min">Book by phone</div>
                <div class="phone">+66 82-422-6466</div>
                <div class="text-min">Monday-Sunday</div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

</div>


<script type="text/javascript">

    var map;
    function initMap() {

        <?php if(!empty($model->coords_lat) && !empty($model->coords_lng)){ ?>

        var myLatlng = new google.maps.LatLng(<?=$model->coords_lat?>,<?=$model->coords_lng?>);

        <?php } else { ?>

        var myLatlng = new google.maps.LatLng(-25.363882,131.044922);

        <?php } ?>

        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatlng,
            zoom: 12
        });

        var marker = new google.maps.Marker({
            position: myLatlng,
            title: "<?=$model->name?>"
        });

        // To add the marker to the map, call setMap();
        marker.setMap(map);

        google.maps.event.addListener(map, "click", function(event) {
            var lat = event.latLng.lat();
            var lng = event.latLng.lng();

            $('#coords_lat').val(lat);
            $('#coords_lng').val(lng);
            // populate yor box/field with lat, lng
          //  alert("Yo`ve choosen new coordinates\nLat=" + lat + "; Lng=" + lng);

            /*var infowindow = new google.maps.InfoWindow({
             content: 'You`ve choosen new coordinates for this booking: ['+lat+']['+lng+']';
             });*/

        });
    }


</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlrEqXZtD1KWOgkKpUv6JCwh1N4YdC4vU&callback=initMap">
</script>

