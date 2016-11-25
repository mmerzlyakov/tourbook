<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25.11.2016
 * Time: 4:23
 */

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class File extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 10],
        ];
    }


    public function upload($model_id)
    {
        $random = rand(0,100000000);
        if (!empty($model_id)) {
            if ($this->validate()) {
                foreach ($this->imageFile as $file) {
                    $file->saveAs('uploads/' . $model_id . '.'. $random . '.' . $file->extension);
                    $path[] = 'uploads/' . $model_id . '.' . $random .  '.' . $file->extension;
                }
                return json_encode($path);
            } else
                return false;
        }
    }

   /* public function upload($model_id)
    {
        if(!empty($model_id)) {

            if ($this->validate()) {
                foreach ($this->imageFile as $file) {
                    $file->saveAs(
                        'uploads/' . $model_id.'-'.$file->baseName . '.' . $file->extension
                    );
                }
                return '{}';
            } else {
                return false;
            }
        }
        else return false;
    } */
}