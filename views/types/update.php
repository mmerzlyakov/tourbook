<?php

\app\libs\Language::select();
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\types */

$this->title = Yii::t('app', 'Update')." ". Yii::t('app', 'Types')." : ".$model->name;


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_file' => $model_file,
    ]) ?>

</div>
