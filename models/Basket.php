<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "basket".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $basket_id
 * @property integer $booking_id
 * @property integer $status
 */
class Basket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'booking_id', 'status'], 'integer'],
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
            'basket_id' => Yii::t('app', 'Basket ID'),
            'booking_id' => Yii::t('app', 'Booking ID'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
