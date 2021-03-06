<?php
\app\libs\Language::select();

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */

$this->title = Yii::t('app', 'Update')." ". Yii::t('app', 'Booking')." : ".$model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bookings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="booking-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model_file' => $model_file,
        'model' => $model,
        'types' => $types,
        'cities' => $cities,
        //'tagsList' => $tagsList,
    ]) ?>

</div>
