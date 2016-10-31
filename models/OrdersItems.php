<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders_items".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $book_id
 * @property double $price
 * @property integer $bonus
 * @property double $discount
 * @property string $comment
 * @property integer $status_id
 * @property integer $status
 */
class OrdersItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'order_id', 'book_id', 'bonus', 'status_id', 'status'], 'integer'],
            [['price', 'discount'], 'number'],
            [['comment'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'order_id' => Yii::t('app', 'Order ID'),
            'book_id' => Yii::t('app', 'Book ID'),
            'price' => Yii::t('app', 'Price'),
            'bonus' => Yii::t('app', 'Bonus'),
            'discount' => Yii::t('app', 'Discount'),
            'comment' => Yii::t('app', 'Comment'),
            'status_id' => Yii::t('app', 'Status ID'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
