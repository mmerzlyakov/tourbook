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
class TagsImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tags_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_id',  'main', 'status'], 'integer'],
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
            'tag_id' => Yii::t('app', 'Tag ID'),
            'path' => Yii::t('app', 'Path'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
