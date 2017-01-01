<?php

namespace app\widgets;
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
class WLeftMenu extends Widget {


    public function run(){
        ?>
        <div class="box_style_cat">
            <ul id="cat_nav">
                <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>All tours <span>(141)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-3"></i>City sightseeing <span>(20)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-4"></i>Museum tours <span>(16)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-44"></i>Historic Buildings <span>(12)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-37"></i>Walking tours <span>(11)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-14"></i>Eat & Drink <span>(20)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-43"></i>Churces <span>(08)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-28"></i>Skyline tours <span>(11)</span></a></li>
            </ul>
        </div>
        <?php
    }
}
?>

