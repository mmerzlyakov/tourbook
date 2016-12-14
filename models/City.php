<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property integer $country_id
 * @property string $name
 * @property string $description
 * @property string $full_description
 * @property integer $status
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'name', 'description', 'full_description', 'status'], 'required'],
            [['country_id', 'status'], 'integer'],
            [['description', 'full_description'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'full_description' => Yii::t('app', 'Full Description'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
