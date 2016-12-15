<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $full_description
 * @property string $options
 * @property integer $status
 */
class country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'full_description', 'options', 'status'], 'required'],
            [['description', 'full_description', 'options', ], 'string'],
            [['status', 'language'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['currency'], 'safe'],
            [['locale'], 'string', 'max' => 5],
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
            'full_description' => Yii::t('app', 'Full Description'),
            'options' => Yii::t('app', 'Options'),
            'language' => Yii::t('app', 'We`re working on this language'),
            'status' => Yii::t('app', 'Status'),
            'locale' => Yii::t('app', 'Locale'),
            'currency' => Yii::t('app', 'Currency'),
        ];
    }
}
