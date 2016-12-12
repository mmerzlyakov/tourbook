<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property integer $id
 * @property integer $name
 * @property integer $description
 * @property integer $type_id
 * @property integer $price
 * @property integer $options
 * @property integer $images
 * @property integer $status
 * @property integer $bonus
 * @property integer $discount
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'booking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'price', 'status'], 'required'],
            [['type_id', 'price', 'status', 'bonus', 'discount', 'city_id'], 'integer'],
            [['name', 'description','options[]', 'coords_lat', 'coords_lng'], 'string'],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'type_id' => Yii::t('app', 'Type ID'),
            'price' => Yii::t('app', 'Price'),
            'options' => Yii::t('app', 'Options'),
            'images' => Yii::t('app', 'Images'),
            'status' => Yii::t('app', 'Status'),
            'bonus' => Yii::t('app', 'Bonus'),
            'discount' => Yii::t('app', 'Discount'),
            'coords' => Yii::t('app', 'Coordinates'),
        ];
    }
}
