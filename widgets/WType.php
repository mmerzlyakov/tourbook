<?php

namespace app\widgets;

use app\models\CityImages;
use app\models\CountryImages;
use app\models\TypesImages;
use yii\base\Widget;
use yii\helpers\Url;
use Yii;

/**
 * @var object $model
 * @var object $variation
 * @var array $image
 * @var array $sticker
 * @var string $alias
 * @var string $url
 *
 */
class WType extends Widget {
    public $model;

    public function init() {
        parent::init();
        if ($this->model === null) {
            $this->model = false;
        }
    }

    public function run(){
        if(!$this->model){
            return false;
        }else {
            $imagePath = TypesImages::find()->where(
                [
                    'type_id' => $this->model->id,
                    'status' => 1,
                    'main' => 1,
                ]

            )->one();


                // var_dump($imagePath);die();
                ?>

                <a href="/types/types-view?id=<?=$this->model->id?>"class="no-border" style="font-size: 25px;">[<?= $this->model->name ?>]
                <?php if (!empty($imagePath)) { ?>

                <img width =40 src="/<?=$imagePath->path?>">


                </a>
                <?php }
        }
    }
}
?>

