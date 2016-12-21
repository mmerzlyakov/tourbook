<?php

\app\libs\Language::select();
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WishList */

$this->title = Yii::t('app', 'Update')." ". Yii::t('app', 'WishLists')." : ".$model->id;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'WishLists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="wish-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
