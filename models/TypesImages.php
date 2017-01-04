<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tags_images".
 *
 * @property integer $id
 * @property integer $tag_id
 * @property string $path
 * @property integer $status
 */
class TypesImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'types_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'main', 'status'], 'integer'],
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
            'type_id' => Yii::t('app', 'Type ID'),
            'main' => Yii::t('app', 'Main ID'),
            'path' => Yii::t('app', 'Path'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
