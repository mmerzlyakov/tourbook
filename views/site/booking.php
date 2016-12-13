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
    <div class="gallery">
        <div class="items">
            <div class="image"><img src="/files/gallery/1001.jpg" class="rad"/></div>
            <div class="image"><img src="/files/gallery/1002.jpg" class="rad"/></div>
            <div class="image"><img src="/files/gallery/1003.jpg" class="rad"/></div>
        </div>
    </div>
    <div class="container">
        <ol class="breadcrumb">
            <li class="icon-balun"><a href="#">Главная</a></li>
            <li><a href="#">Библиотека</a></li>
            <li>Данные</li>
        </ol>
        <div class="col-xs-12 col-md-8">
            <div class="services">
                <div class="block">
                    <span class="icon-service"><b class="name">Museum</b></span>
                    <span class="icon-service md-1"><b class="name">Audio guide</b></span>
                    <span class="icon-service md-2"><b class="name">Accessibiliy</b></span>
                    <span class="icon-service md-3"><b class="name">Tour guide</b></span>
                    <span class="icon-service md-4"><b class="name">Transport</b></span>
                    <span class="icon-service md-5"><b class="name">Hours</b></span>
                    <span class="icon-service md-6"><b class="name">Pet allowed</b></span>
                </div>
                <div class="clear"></div>
            </div>
            <h1 class="title"><?=$model->name?></h1>
            <div class="text">
                <?=$model->description?>
            </div>
            <div class="info-text">
                <ul>
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
            <div class="price"><b>взрослый - <?=$model->price?>$</b></div>
            <div class="price"><b>дестский - <?=$model->price?>$</b></div>
            <div class="sh">дети до 5 лет бесплатно</div>
            <div class="button map"><div class="oran">

                    <div id="map" style="width: 100%; height: 200px;"></div>


                </div></div>
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

