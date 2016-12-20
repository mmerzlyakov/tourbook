<?php

\app\libs\Language::select();
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\User;
use app\models\OrdersItems;
use app\models\Booking;
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
                'label' => Yii::t('app','User'),
                //'label' => 'User',
                'content' => function($data){
                    $user = User::find()->where('id = '.$data['user_id'])->one();
                    return $user->name."<br><br>".$user->email;
                }
            ],
            //'booking_id',
            [
                'attribute' => 'date',
                'label' =>  Yii::t('app','Event date'),
            ],
            //'price',

            // 'bonus',
            // 'status_id',
             [
                    'attribute' => 'comment',
                    'label' => Yii::t('app','Comment & Content'),
                    'content' => function($data){
                        $items = OrdersItems::find()->where('order_id = '.$data['id'])->all();

                        if(!empty($items)){
                            $summa = 0;

                            $array = $data['comment']."<br><br>";
                                foreach($items as $key=>$item){
                                    $book = Booking::find()->where('id = '.$item->id)->one();
                                    $array = $array."<b>Name:</b> "
                                        .$book->name
                                        ."<br><b>Description:</b>"
                                        .$book->description
                                        ."<br><b>Price:</b>"
                                        .$book->price
                                        ."<br><br>";


                                    $summa+=$book->price;
                                }
                            $array = $array."<b>Summary amount:</b>".$summa."<br><br>";
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
