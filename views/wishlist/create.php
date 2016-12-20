<?php

\app\libs\Language::select();
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WishList */

$this->title = Yii::t('app', 'Create Wish List');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Wish Lists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wish-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
