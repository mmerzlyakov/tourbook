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

class FileBanner extends Model
{
    /**
     * @var UploadedFile
     */
    public $bannerFile;

    public function rules()
    {
        return [
            [['bannerFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 10],
        ];
    }


    public function upload($model_id)
    {
        $random = rand(0,100000000);
        if (!empty($model_id)) {
            if ($this->validate()) {
                foreach ($this->bannerFile as $file) {
                    $file->saveAs('uploads/' . $model_id . '.'. $random . '.' . $file->extension);
                    $path[] = 'uploads/' . $model_id . '.' . $random .  '.' . $file->extension;
                }
                return json_encode($path);
            } else
                return false;
        }
    }

}