<?php

namespace app\widgets;

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
class WCountryList extends Widget {
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
        }else { ?>

         ++++++++++++++++++++++++++++

        <?php }
    }
}
?>

