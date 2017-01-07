<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StaticPages */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Static Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-pages-view">

    <br><br>
    <div class="container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text"><?=$model->content?></p>

    </div>

</div>
