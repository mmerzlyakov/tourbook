<?php

\app\libs\Language::select();
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WishListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Wish Lists');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wish-list-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Wish List'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            //'user_id',
            [
                'attribute' => 'user_id',
                'label' => 'User',
                'content' => function($data){
                    $user = User::find()->where('id = '.$data['user_id'])->one();
                    return $user->name."<br><br>".$user->email;
                }
            ],
            [
                'attribute' => 'wish',
                'content' => function($model){
                    $booking = \app\models\Booking::find()->where('id = '.$model->wish)->one();
                    return $booking->name ;
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
