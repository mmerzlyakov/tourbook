<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country_images".
 *
 * @property integer $id
 * @property integer $country_id
 * @property string $path
 * @property integer $status
 */
class CountryImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country_images';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'status'], 'integer'],
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
            'country_id' => Yii::t('app', 'Country ID'),
            'path' => Yii::t('app', 'Path'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

}