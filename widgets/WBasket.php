<?php

namespace app\widgets;

use app\models\Basket;
use app\models\CountryImages;
use yii\base\Widget;
use yii\helpers\Url;
use Yii;
use app\models\BookingImages;

/**
 * @var object $model
 * @var object $variation
 * @var array $image
 * @var array $sticker
 * @var string $alias
 * @var string $url
 *
 */

class WBasket extends Widget {
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
//          echo Yii::$app->user->name;

                $basket = Basket::find()->where('user_id = '.$this->model)->andWhere('status = 1')->all();
                if(!empty($basket)) { ?>
                    <a href="/basket/" class="basket no-border">
                        <div class="count"><?=count($basket);?></div>
                        <div class="glyphicon glyphicon-shopping-cart"></div>
                    </a>

<?php } else{ ?>

                    Basket is empty

<?php
                }
            }
        }
}
?>

