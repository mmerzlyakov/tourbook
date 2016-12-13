<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking_images".
 *
 * @property integer $id
 * @property integer $booking_id
 * @property integer $path
 * @property integer $status
 */
class BookingImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['booking_id','status', 'path', 'imageFile', 'main'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'booking_id' => Yii::t('app', 'Booking'),
            'imageFile' => Yii::t('app', 'imageFile'),
            'path' => Yii::t('app', 'Path'),
            'main' => Yii::t('app', 'Main'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

}
