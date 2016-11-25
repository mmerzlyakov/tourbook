<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\basket */

$this->title = Yii::t('app', 'Create Basket');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Baskets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
