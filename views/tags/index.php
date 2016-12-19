<?php

\app\libs\Language::select();


use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */





$this->title = Yii::t('app', 'Tags');
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="tags-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Tags'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
           [
               'attribute'=>'status',
               //'label' => 'Статус',
               'content' => function($model){
                   return $model->status ? "<span class='text-success'>".Yii::t('app', 'Active')."</span>" : "<span class='text-danger'>".Yii::t('app', 'Not active')."</span>";
               }
           ],


             ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
