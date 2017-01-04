<?php

\app\libs\Language::select();
use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
use yii\web\JsExpression;
use kartik\file\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\types */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="types-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php // = $form->field($model, 'options')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?php

    if(!empty($model->id)) {

        $url = \yii\helpers\Url::to(['/tags/get-tags-list']);

        //Get the initial city description
        //$tagsDesc = empty($model->tags) ? '' : \app\models\TagsLinks::find()->where('booking_id = '.$model->id)->one()->description;
        //$data=['5','4','3','2'];
        //var_dump($data);

        $tagsLinks = \app\models\TypesLinks::find()->where(
            'type_id = ' . $model->id
        )->andWhere('status = 1')->all();
        $arr = [];
        foreach ($tagsLinks as $i => $item) {
            $arr[] = \app\models\Tags::find()->select('name')->where(
                'id = ' . $item->tag_id
            )->andWhere('status = 1')->one()->name;
        }

        $model->tags = $arr;
        echo $form->field($model, 'tags')->widget(
            Select2::classname(), [
                'initValueText' => $model->tags,
                'options' => ['placeholder' => 'Search for a tags ...',
                              'multiple' => true],
                'id' => 'tagsLinks',
                'pluginOptions' => [
                    'allowClear' => true,
                    'minimumInputLength' => 2,
                    'language' => [
                        'errorLoading' =>
                            new JsExpression(
                                "function () { return 'Waiting for results...'; }"
                            ),
                    ],
                    'ajax' => [
                        'url' => $url,
                        'dataType' => 'json',
                        'cache' => true,
                        'data' => new JsExpression(
                            'function(params) { return {q:params.term}; }'
                        )
                    ],
                    'escapeMarkup' => new JsExpression(
                        'function (markup) { return markup; }'
                    ),
                    'templateResult' => new JsExpression(
                        'function(item) { return item.text; }'
                    ),
                    'templateSelection' => new JsExpression(
                        'function (item) { return item.text; }'
                    ),
                ],
                'pluginEvents' => [
                    'select2:unselecting' =>
                        new JsExpression(
                            '
                function(e) { 
                    //console.log(e.params.args.data);
                     if(confirm(\'Are you sure?\')){
                    $.get(\'/tags/del-type-links\',
                    {
                        tag_name: e.params.args.data.id, 
                        type_id: ' . $model->id . '
                    })
                    .done(function( data ) { });
                    
                } else { alert(\'Canceled\'); return false; }}'
                        ),

                    'select2:selecting' =>
                        new JsExpression(
                            'function(e) { 
                    //console.log(e.params.args.data);

                    $.get(\'/tags/add-type-links\',
                    {
                        tag_id: e.params.args.data.id, 
                        type_id: ' . $model->id . '
                    })
                    .done(function( data ) { });
                } '
                        ),
                ],
            ]
        );


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

            // Tagging support Multiple
            $model->tags =  ['red', 'green']; // initial value
            echo $form->field($model, 'tags')->widget(Select2::classname(), [
                'data' => $data,
                    'options' => ['placeholder' => 'Select a color ...', 'multiple' => true],
                'pluginOptions' => [
                    'tags' => true,
                    'tokenSeparators' => [',', ' '],
                    'maximumInputLength' => 10
                ],
            ])->label('Tag Multiple');
        */

    }

    ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>



    <?php //= $form->field($model, 'options')->textInput()


    echo Html::input('text', 'tag_name', '', ['class' => 'form-control', 'minlength' => 4, 'maxlength' => 100, 'id' => 'tag_name']);
    echo Html::a('Create a new tag', '', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',
                                          'onClick'=>'return addNewTag();']);

?>

<?php
        //output images
        if(!empty($model->id)) {
$images = \app\models\TypesImages::find()
    ->where('type_id = ' . $model->id)
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
                                        ['/types/upload?model_id=' . $model->id]
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
            $.get('/types/del-type-image', {image_id: i});
            location.reload();
            return true;
        }

        function setMainImage(b,i){
            $.get('/types/add-main-type-image-status', {type_id: b , image_id: i });
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
