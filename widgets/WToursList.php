<?php
namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\StringHelper;
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
class WToursList extends Widget {
    public $model;
    public $images;

    public function init() {
        parent::init();
        if ($this->model === null) {
            $this->model = false;
        }
        if ($this->images === null) {
            $this->images = false;
        }
    }

    public function run(){
        if(!$this->model){
            return false;
        }else {

            ?>
            <div class="strip_all_tour_list">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                        </div>
                        <div class="img_list"><a href="#"><img src="/<?=$this->images[0]->path?>" alt="Image"></a></div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="tour_list_desc">
                            <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small></div>
                            <h3><strong><?=$this->model->name?></strong></h3>
                            <p><?=StringHelper::truncate(strip_tags($this->model->description),250,'...');?></p>
                            <ul class="add_info">
                                <li>
                                    <div class="tooltip_styled tooltip-effect-4">
                                        <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                        <div class="tooltip-content"><h4>Schedule</h4>
                                            <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                            <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                            <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="tooltip_styled tooltip-effect-4">
                                        <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                        <div class="tooltip-content"><h4>Address</h4>
                                            Musée du Louvre, 75058 Paris - France<br>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="tooltip_styled tooltip-effect-4">
                                        <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                        <div class="tooltip-content"><h4>Languages</h4>
                                            English - French - Chinese - Russian - Italian
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="tooltip_styled tooltip-effect-4">
                                        <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                        <div class="tooltip-content"><h4>Parking</h4>
                                            1-3 Rue Elisée Reclus<br>
                                            76 Rue du Général Leclerc<br>
                                            8 Rue Caillaux 94923<br>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="tooltip_styled tooltip-effect-4">
                                        <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                        <div class="tooltip-content"><h4>Transport</h4>
                                            <strong>Metro: </strong>Musée du Louvre station (line 1)<br>
                                            <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><sup>$</sup>39*<span class="normal_price_list">$99</span><small >*Per person</small>
                                <p><a href="single_tour.html" class="btn_1">Details</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--End strip -->
        <?php }
    }
}
?>

