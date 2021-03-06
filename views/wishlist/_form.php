<?php

\app\libs\Language::select();
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WishList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wish-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'wish')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
