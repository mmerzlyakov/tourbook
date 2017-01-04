<?php

\app\libs\Language::select();

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model app\models\Tags */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tags-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->checkbox(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>



    <?php
    //output images
    if(!empty($model->id)) {
    $images = \app\models\TagsImages::find()
        ->where('tag_id = ' . $model->id)
        ->andWhere('status = 1')->all();

    if (!empty($images)) {
    ?>

    <h3>Картиночки</h3>
    <?php

    foreach ($images as $item) {


    echo "<div style='margin: 5px; position: relative; display: inline-block;'>";

    if($item->main==1)
        echo "<div class='close' style='opacity: 1; font-size: 14pt; color: greenyellow; position: absolute; right: 30px; top: 10px; '>V</div>";

    ?>
    <div class='close' style='opacity: 1; font-size: 26pt; color: red; position: absolute; right: 3px; top: 3px; '
         onClick='return delImage(<?=$item->id?>)'>&times;
    </div>
    <img src='/<?=$item->path?>' width=250 id='<?=$item->id ?>'
         onClick='return setMainImage(<?=$model->id?>, <?=$item->id?>)'>
</div>

<?php
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
                                    ['/tags/upload?model_id=' . $model->id]
                                )],
        ]
    );

    ActiveForm::end();
}
?>


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

    function delImage(i){
        $.get('/tags/del-tag-image', {image_id: i});
        location.reload();
        return true;
    }

    function setMainImage(b,i){
        $.get('/tags/add-main-tag-image-status', {tag_id: b , image_id: i });
        location.reload();
        return true;
    }



    function addNewTag(){
        var name = $('#tag_name').val();
        $.get('/tags/add-new-tag', {tag_name: name });
        $('#tag_name').val('');
        //location.reload();
        return false;
    }

</script>


</div>
