<?php

namespace app\widgets;

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
class WBasketItem extends Widget {
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
            $imagePath = BookingImages::find()->where('booking_id = '.$this->model->id)->one();
            if(!empty($imagePath)) {
                // var_dump($imagePath);die();
                ?>

                <div class="item col-md-4 col-sm-6">
                    <div class="content-item">
                        <div class="image"><a href="/site/booking?id=<?=$this->model->id?>"><img style="width: 250px; !important;" src="/<?= $imagePath->path ?>" alt=""></a>
                            <div class="glyphicon glyphicon-heart like"></div>
                            <div class="money">
                                <div>US</div>
                                <div><?= $this->model->price ?> $</div>
                            </div>
                        </div>
                        <div class="content-text">
                            <div class="title"><?= $this->model->name ?></div>
                            <div class="text-min"><?= $this->model->description ?></div>
                            <div class="rating">
                                <div class="rating-icon rating-1"></div>
                            </div>
                            <div class="view icon-view">1.6 k Booked</div>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}
?>
