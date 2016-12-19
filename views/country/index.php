<?php

\app\libs\Language::select();

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Countries');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Country'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'name',
            [
                'attribute' => 'description',
                'format' => 'raw',
                'content' => function($data){

                    return  htmlentities(substr($data['description'], 0, 500), ENT_QUOTES);

                }

            ],
            [
                'attribute' => 'full_description',
                'format' => 'raw',
                'content' => function($data){

                    return  htmlentities(substr($data['full_description'], 0, 500), ENT_QUOTES);

                }

            ],
            /*[
                'attribute' => 'full_description',
                'format' => 'raw',
                'content' => function($data){
                    return substr($data['full_description'], 0, 3000);
                }
            ],*/

//            'description:ntext',
  //          'full_description:ntext',
            'options:ntext',
            // 'status',
            [
                'attribute' => 'status',
                'label' => \Yii::t('app','images'),
                'content' => function($model)
                {
                    $str = "";
                    if(!empty($model->id)) {
                        $images = \app\models\CountryImages::find()->where('country_id = ' . $model->id)->all();
                        if (!empty($images)) {
                            foreach ($images as $item) {

                                $str.="<img src='/" . $item->path . "' width=80 id='"
                                    . $item->id
                                    . "'>";
                            }
                        }
                    }
                    // $string = substr($str, 0, 200);

                    return $str;
                },

            ],
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
