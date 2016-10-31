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
            [['description', 'full_description', 'options', 'flag'], 'string'],
            [['status'], 'integer'],
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
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'full_description' => Yii::t('app', 'Full Description'),
            'options' => Yii::t('app', 'Options'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
