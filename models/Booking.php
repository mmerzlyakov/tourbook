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
    public $tags;
    public $notags;
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
            [['type_id', 'price', 'price_child', 'child_before','status', 'bonus', 'discount', 'city_id', 'price_private', 'return_before'], 'integer'],
            [['name', 'description','options', 'coords_lat', 'coords_lng','notice', 'included', 'not_included', 'address'], 'string'],
            ['tags', 'safe'],
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
            'address' => Yii::t('app', 'Address'),
            'type_id' => Yii::t('app', 'Type ID'),
            'price' => Yii::t('app', 'Price'),
            'price_child' => Yii::t('app', 'Price Child'),
            'child_before' => Yii::t('app', 'Child before'),
            'options' => Yii::t('app', 'Options'),
            'images' => Yii::t('app', 'Images'),
            'status' => Yii::t('app', 'Status'),
            'bonus' => Yii::t('app', 'Bonus'),
            'discount' => Yii::t('app', 'Discount'),
            'coords' => Yii::t('app', 'Coordinates'),
            'price_private' => Yii::t('app', 'Private price'),
            'notice' => Yii::t('app', 'Notice'),
            'included' => Yii::t('app', 'Included'),
            'not_included' => Yii::t('app', 'Not included'),
        ];
    }
}
