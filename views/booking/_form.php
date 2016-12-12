<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;
use yii\helpers\Url;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */
/* @var $form yii\widgets\ActiveForm */


/*******
 * View
 ******/

// The controller action that will render the list
// $url = \yii\helpers\Url::to(['city-list']);

// The widget
// use kartik\widgets\Select2; // or kartik\select2\Select2

use kartik\select2\Select2;
use yii\web\JsExpression;
// use app\models\City;
// Get the initial city description
// $cityDesc = empty($model->city) ? '' : City::findOne($model->city)->description;
// The controller action that will render the list
$url = \yii\helpers\Url::to(['/tags/get-tags-list']);

?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map($cities, 'id','name'))->label('City') ?>
    <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map($types, 'id','description'))->label('Type') ?>
    <?= $form->field($model, 'name')->textInput() ?>

    <?php //= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'description')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
    ]) ?>

    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'options')->textInput(['class' => 'tags-input']) ?>

    <?php
/*
    $data = [
        "red" => "red",
        "green" => "green",
        "blue" => "blue",
        "orange" => "orange",
        "white" => "white",
        "black" => "black",
        "purple" => "purple",
        "cyan" => "cyan",
        "teal" => "teal"
    ];

    echo $form->field($model, 'options')->widget(Select2::classname(), [
        'data' => $data,
        'options' => ['placeholder' => 'Select a color ...',],
        'pluginOptions' => [
            'tags' => true,
            'tokenSeparators' => [',', ' '],
            'maximumInputLength' => 10
        ],
    ])->label('Tag Multiple');
*/

    echo $form->field($model, 'options[]')->widget(Select2::classname(), [
        'initValueText' => 'Tags', //$cityDesc, // set the initial display text
        'options' => ['placeholder' => 'Search for a tags ...', ],//'multiple' => true,
        'pluginOptions' => [
        'allowClear' => true,
        'minimumInputLength' => 1,
            'language' => [
                'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
            ],
            'ajax' => [
                'url' => $url,
                'dataType' => 'json',
                'data' => new JsExpression('function(params) { return {q:params.term}; }')
            ],
            'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
            'templateResult' => new JsExpression('function(options) { return options.text; }'),
            'templateSelection' => new JsExpression('function (options) { return options.text; }'),
        ],
    ]);

    ?>

    <?= $form->field($model, 'status')->checkbox()->label('Active?') ?>
    <?= $form->field($model, 'bonus')->textInput() ?>
    <?= $form->field($model, 'discount')->textInput()->label('Discount %') ?>

    <?= $form->field($model, 'coords_lat')->hiddenInput(['id' => 'coords_lat'])->label('') ?>
    <?= $form->field($model, 'coords_lng')->hiddenInput(['id' => 'coords_lng'])->label('') ?>

    <div id="map" style="width: 100%; height: 200px;"></div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') :
                Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>



    <?php ActiveForm::end(); ?>


    <?php
    //output images
    if(!empty($model->id)) {
        $images = \app\models\BookingImages::find()->where('booking_id = ' . $model->id)->all();
        if (!empty($images)) {
            ?>

            <h3>Картиночки</h3>
            <?php

            foreach ($images as $item) {


                echo "<div style='margin: 5px; position: relative; display: inline-block;'><div class='close' style='opacity: 1; font-size: 26pt; color: red; position: absolute; right: 0px; top 0px; ' onClick='return BookImageDelete('. $item->id .')'>&times;</div><img src='/" . $item->path . "' width=250 id='"
                    . $item->id
                    . "'></div>";
            }
        }
    }
    //add images
    if(!empty($model->id)) {
        ?>

        <h3>Добавить картиночки</h3>

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);

            echo $form->field($model_file, 'imageFile[]')->widget(
                FileInput::classname(), [
                'options' => ['multiple' => true],
                'pluginOptions' => ['previewFileType' => 'any',
                                    'uploadUrl' => Url::to(
                                        ['/booking/upload?model_id=' . $model->id]
                                    )],
            ]
            );

        ActiveForm::end();
    }
    ?>

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
            alert("Yo`ve choosen new coordinates\nLat=" + lat + "; Lng=" + lng);

            /*var infowindow = new google.maps.InfoWindow({
                content: 'You`ve choosen new coordinates for this booking: ['+lat+']['+lng+']';
            });*/

        });
    }


</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlrEqXZtD1KWOgkKpUv6JCwh1N4YdC4vU&callback=initMap">
</script>
