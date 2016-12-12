<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $booking_id
 * @property string $description
 * @property integer $rate
 * @property integer $status
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'booking_id', 'rate', 'status'], 'integer'],
            [['description'], 'string'],
            [['date'],'safe'],
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
            'booking_id' => Yii::t('app', 'Booking ID'),
            'description' => Yii::t('app', 'Description'),
            'rate' => Yii::t('app', 'Rate'),
            'date' => Yii::t('app', 'Date'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
