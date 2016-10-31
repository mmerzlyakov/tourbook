<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $booking_id
 * @property integer $date
 * @property integer $price
 * @property integer $bonus
 * @property integer $status_id
 * @property string $comment
 * @property integer $discount
 * @property integer $transaction_id
 * @property integer $status
 */
class orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id','date','transaction_id','status'], 'required'],
            [['user_id','date','transaction_id','status'], 'integer'],
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
            'user_id' => Yii::t('app', 'User ID'),
            'date' => Yii::t('app', 'Date'),
            'comment' => Yii::t('app', 'Comment'),
            'transaction_id' => Yii::t('app', 'Transaction ID'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
