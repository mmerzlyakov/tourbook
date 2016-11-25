<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Country;
use yii\helpers\Url;
use kartik\file\FileInput;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\City */
/* @var $form yii\widgets\ActiveForm */



?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country_id')->DropDownList(ArrayHelper::map($countries, 'id', 'name'))->label('Country')->hint('Here we should select the country which this city belows'); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'description')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
    ]) ?>

    <?php //= $form->field($model, 'full_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'full_description')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
    ]) ?>

    <?= $form->field($model, 'status')->checkbox(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?php
    //output images
    if(!empty($model->id)) {
        $images = \app\models\CityImages::find()->where('city_id = ' . $model->id)->all();
        if (!empty($images)) {
            ?>

            <h3>Картиночки</h3>
            <?php

            foreach ($images as $item) {
                echo "<img src='/" . $item->path . "' width=250 id='"
                    . $item->id
                    . "'>";
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
                                        ['/city/upload?model_id=' . $model->id]
                                    )],
            ]
        );

        ActiveForm::end();
    }
    ?>

</div>
