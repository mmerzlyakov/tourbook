<?php

\app\libs\Language::select();

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;
use dosamigos\tinymce\TinyMce;


/* @var $this yii\web\View */
/* @var $model app\models\Country */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?php //= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
    ]) ?>

    <?php //= $form->field($model, 'full_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'full_description')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
    ]) ?>

    <?= $form->field($model, 'currency')->textInput(['rows' => 6]) ?>
    <?= $form->field($model, 'options')->textInput(['rows' => 6]) ?>
    <?php // = $form->field($model, 'flag')->fileInput() ?>
    <?= $form->field($model, 'status')->checkbox() ?>
    <?= $form->field($model, 'language')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


    <?php
    //output images
    if(!empty($model->id) && !empty($model->language)) {
        $images = \app\models\CountryFlags::find()->where('country_id = ' . $model->id)->all();
        if (!empty($images)) {
            ?>

            <h3>Флаг</h3>
            <?php

            foreach ($images as $item) {
                echo "<img src='/" . $item->path . "' width=250 id='"
                    . $item->id
                    . "'>";
            }
        }
    }
    //add images
    if(!empty($model->id) && !empty($model->language)) {
        ?>

        <h3>Добавить флаг</h3>

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);

        echo $form->field($model_file_flag, 'imageFileFlag[]')->widget(
            FileInput::classname(), [
                'options' => ['multiple' => true],
                'pluginOptions' => ['previewFileType' => 'any',
                                    'uploadUrl' => Url::to(
                                        ['/country/upload-flag?model_id=' . $model->id]
                                    )],
            ]
        );

        ActiveForm::end();
    }
    ?>


    <?php
    //output images
    if(!empty($model->id)) {
        $images = \app\models\CountryImages::find()->where('country_id = ' . $model->id)->all();
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
                                        ['/country/upload?model_id=' . $model->id]
                                    )],
            ]
        );

        ActiveForm::end();
    }
    ?>


</div>
