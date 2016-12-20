<?php

\app\libs\Language::select();


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\City */


$this->title = Yii::t('app', 'Update')." ". Yii::t('app', 'Cities')." : ".$model->name;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id, 'country_id' => $model->country_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="city-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'country_id' => $country_id,
        'countries' => $countries,
        'model_file' => $model_file,
    ]) ?>

</div>
