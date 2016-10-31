<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\User;
use app\models\OrdersItems;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Orders');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php if(Yii::$app->user->can('GodMode')) {echo  Html::a(Yii::t('app', 'Create Orders'), ['create'], ['class' => 'btn btn-success']); } ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            //'user_id',
            [
                'attribute' => 'user_id',
                'label' => 'User',
                'content' => function($data){
                    $user = User::find()->where('id = '.$data['user_id'])->one();
                    return $user->name."<br><br>".$user->email;
                }
            ],
            //'booking_id',
            [
                'attribute' => 'date',
                'label' => 'Event date',
            ],
            //'price',

            // 'bonus',
            // 'status_id',
             [
                    'attribute' => 'comment',
                    'label' => 'Comment & Content',
                    'content' => function($data){
                        $items = OrdersItems::find()->where('order_id = '.$data['id'])->all();

                        if(!empty($items)){
                            $array = "";
                                foreach($items as $key=>$item){
                                    $array = $array." ".$item->name."<br>";
                                }
                            return $array;
                        }
                        else
                            return $data['comment']."<br><br>No items found";
                    }
            ],
    //'comment:ntext',
            // 'discount',
             'transaction_id',
            // 'status',
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
