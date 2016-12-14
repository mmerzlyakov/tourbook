<?php

namespace app\widgets;

use app\models\CityImages;
use app\models\CountryImages;
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
class WCity extends Widget {
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
            $imagePath = CityImages::find()->where(
                'city_id = ' . $this->model->id
            )->one();

            if (!empty($imagePath)) {
                // var_dump($imagePath);die();
                ?>
                <div class="col-xs-6 col-sm-6 col-md-4 box__max">
                    <a class="no-border" href="/city/city-view?id=<?=$this->model->id?>">
                        <div class="item">
                            <div class="image"
                                 style="background: url('/<?= $imagePath->path ?>') no-repeat;">
                                <div class="name">
                                    <div class="name-box"><a href="/city/city-view?id=<?=$this->model->id?>"
                                                             class="white no-border"><?= $this->model->name ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <?php
            }
        }
    }
}
?>

