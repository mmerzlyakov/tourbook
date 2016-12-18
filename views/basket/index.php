<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BasketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Baskets');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
   <div id="basket">
    <h1>Your Basket</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p><?php //= Html::a(Yii::t('app', 'Create Basket'), ['create'], ['class' => 'btn btn-success']) ?></p>
    <div class="col-md-12">
        <!--------Тут нужно загенерироват таблица -------->
        <table class="table table-striped cart-list add_bottom_30">
            <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Discount</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
               <tr>
                       <td>
                           <div class="thumb_cart">
                               <img src="/files/thumb_cart_1.jpg" alt="Image">
                           </div>
                           <span class="item_cart">Louvre Museum tickets</span>
                       </td>
                       <td>
                           <div class="counts__m count_basket">
                               <div class="counts">
                                   <div class="plus glyphicon-plus"></div>
                                   <input type="text" value="0" class="count" name="count" maxlength="2"/>
                                   <div class="minus glyphicon-minus"></div>
                               </div>
                           </div>
                       </td>
                       <td>
                           0%
                       </td>
                       <td>
                           <strong>€24,71</strong>
                       </td>
                       <td class="options">
                           <a href="#"><i class=" icon-trash"></i></a><a href="#"><i class="icon-ccw-2"></i></a>
                       </td>
                   </tr>
               <tr>
                   <td>
                       <div class="thumb_cart">
                           <img src="/files/thumb_cart_1.jpg" alt="Image">
                       </div>
                       <span class="item_cart">Louvre Museum tickets</span>
                   </td>
                   <td>
                       <div class="counts__m count_basket">
                           <div class="counts">
                               <div class="plus glyphicon-plus"></div>
                               <input type="text" value="0" class="count" name="count" maxlength="2"/>
                               <div class="minus glyphicon-minus"></div>
                           </div>
                       </div>
                   </td>
                   <td>
                       0%
                   </td>
                   <td>
                       <strong>€24,71</strong>
                   </td>
                   <td class="options">
                       <a href="#"><i class=" icon-trash"></i></a><a href="#"><i class="icon-ccw-2"></i></a>
                   </td>
               </tr>
               <tr>
                   <td>
                       <div class="thumb_cart">
                           <img src="/files/thumb_cart_1.jpg" alt="Image">
                       </div>
                       <span class="item_cart">Louvre Museum tickets</span>
                   </td>
                   <td>
                       <div class="counts__m count_basket">
                           <div class="counts">
                               <div class="plus glyphicon-plus"></div>
                               <input type="text" value="0" class="count" name="count" maxlength="2"/>
                               <div class="minus glyphicon-minus"></div>
                           </div>
                       </div>
                   </td>
                   <td>
                       0%
                   </td>
                   <td>
                       <strong>€24,71</strong>
                   </td>
                   <td class="options">
                       <a href="#"><i class=" icon-trash"></i></a><a href="#"><i class="icon-ccw-2"></i></a>
                   </td>
               </tr>
               <tr>
                   <td>
                       <div class="thumb_cart">
                           <img src="/files/thumb_cart_1.jpg" alt="Image">
                       </div>
                       <span class="item_cart">Louvre Museum tickets</span>
                   </td>
                   <td>
                       <div class="counts__m count_basket">
                           <div class="counts">
                               <div class="plus glyphicon-plus"></div>
                               <input type="text" value="0" class="count" name="count" maxlength="2"/>
                               <div class="minus glyphicon-minus"></div>
                           </div>
                       </div>
                   </td>
                   <td>
                       0%
                   </td>
                   <td>
                       <strong>€24,71</strong>
                   </td>
                   <td class="options">
                       <a href="#"><i class=" icon-trash"></i></a><a href="#"><i class="icon-ccw-2"></i></a>
                   </td>
               </tr>
               <tr>
                   <td>
                       <div class="thumb_cart">
                           <img src="/files/thumb_cart_1.jpg" alt="Image">
                       </div>
                       <span class="item_cart">Louvre Museum tickets</span>
                   </td>
                   <td>
                       <div class="counts__m count_basket">
                           <div class="counts">
                               <div class="plus glyphicon-plus"></div>
                               <input type="text" value="0" class="count" name="count" maxlength="2"/>
                               <div class="minus glyphicon-minus"></div>
                           </div>
                       </div>
                   </td>
                   <td>
                       0%
                   </td>
                   <td>
                       <strong>€24,71</strong>
                   </td>
                   <td class="options">
                       <a href="#"><i class=" icon-trash"></i></a><a href="#"><i class="icon-ccw-2"></i></a>
                   </td>
               </tr>
            </tbody>
        </table>
    </div><!-- End col-md-8 -->
    <?php /*GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions'=>['class'=>'table table-striped cart-list add_bottom_30'], // класс таблицы
        'layout'=>"{items}",
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'user_id',
            [
              'attribute' => 'booking_id',
              'label' => 'Items',
              'content'=>function($data){
                  $booking = \app\models\Booking::find()->where('id = '.$data['booking_id'])->one();
                 // return \app\widgets\WBasketItem::widget(['model' => $booking]);

              }

            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Действия',
                'headerOptions' => ['width' => '80'],
                'template' => '{delete}',
                'buttons' => [
                    'view' => function ($url,$model) {
                        return
                            Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                    'method' => 'post',
                                ],
                            ]);
                            //Html::a('<span class="glyphicon glyphicon-trash"></span>','delete?id='.$model->id);
                    },
                ],

            ],

        ],
    ]); */ ?>
    <p><?= Html::a(Yii::t('app', 'Перейти к оплате'), ['payment'], ['class' => 'btn btn-success']) ?></p>
   </div>
</div>
