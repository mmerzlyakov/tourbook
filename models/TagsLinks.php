<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tags_links".
 *
 * @property integer $id
 * @property integer $tag_id
 * @property integer $booking_id
 * @property integer $status
 */
class TagsLinks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tags_links';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_id', 'booking_id', 'status'], 'integer'],
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
            'booking_id' => Yii::t('app', 'Booking ID'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
