<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StaticPages */

$this->title = Yii::t('app', 'Create Static Pages');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Static Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-pages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
