<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Country;
use app\models\CityImages;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Cities');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create City'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

  //          'id',
            [
                'attribute' => 'country_id',
                'content' => function($data){
                    $country = Country::find()->select('name')->where('id = '.$data['country_id'])->one();
                    return $country->name;
                },
            ],
            'name',
            'description:ntext',
            'full_description:ntext',
            // 'status',
            [
                'attribute' => 'status',
                'label' => 'Photos',
                'content' => function($model)
                {
                    $str = "";
                    if(!empty($model->id)) {
                        $images = \app\models\CityImages::find()->where('city_id = ' . $model->id)->all();
                        if (!empty($images)) {
                            foreach ($images as $item) {
                                $str.="<img src='/" . $item->path . "' width=80 id='"
                                    . $item->id
                                    . "'>";
                            }
                        }
                    }
                    return $str;
                },

            ],
            [
                'attribute' => 'status',
                'content' => function($data){
                    return ($data['status']==1) ? 'Active' : 'Not active';
                },
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
