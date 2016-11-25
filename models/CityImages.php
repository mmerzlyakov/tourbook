<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city_images".
 *
 * @property integer $id
 * @property integer $city_id
 * @property string $path
 * @property integer $status
 */
class CityImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_id', 'status'], 'integer'],
            [['path'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'path' => Yii::t('app', 'Path'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

}
