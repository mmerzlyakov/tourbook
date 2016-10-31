<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map($cities, 'id','name'))->label('City') ?>
    <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map($types, 'id','description'))->label('Type') ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'options')->textInput() ?>
    <?= $form->field($model, 'images')->textInput() ?>
    <?= $form->field($model, 'status')->checkbox()->label('Active?') ?>
    <?= $form->field($model, 'bonus')->textInput() ?>
    <?= $form->field($model, 'discount')->textInput()->label('Discount %') ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
