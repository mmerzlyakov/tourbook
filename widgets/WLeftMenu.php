<?php

namespace app\widgets;
use app\models\Booking;
use app\models\Types;
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

                <?php

                $types = Types::find()
                    ->select('types.id, types.name, types_images.path')
                    ->leftJoin('types_images','types_images.type_id = types.id')
                    ->where('types.status = 1')
                    ->andWhere('types_images.status = 1')
                    ->asArray()
                    ->all();

              //  var_dump($types);die();

                foreach ($types as $type) {

                    $bookings = Booking::find()
                        ->where('status = 1')
                        ->andWhere('type_id = '.$type['id'])
                        ->all();

                    //var_dump($bookings);

                    $count = count($bookings);

                    ?>

                    <li>        <a href="/types/types-view?id=<?=$type['id']?>" id="active">
                                <i><img src="/<?=$type['path']?>" height="30"></i>
                                <?=$type['name']?> <span>(<?=$count?>)</span>
                                </a>
                    </li>

                    <?php

                }
                ?>


            </ul>
        </div>
        <?php
    }
}
?>

