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
    <?= $form->field($model, 'options')->textInput() ?>
    <?= $form->field($model, 'status')->checkbox()->label('Active?') ?>
    <?= $form->field($model, 'bonus')->textInput() ?>
    <?= $form->field($model, 'discount')->textInput()->label('Discount %') ?>

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
                                        ['/booking/upload?model_id=' . $model->id]
                                    )],
            ]
            );

        ActiveForm::end();
    }
    ?>

</div>
