<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/tempale.css',
        'scripts/sliders/slider.css',
        'css/style.css',
        'css/global.css',
        'css/screen.css',
        'css/skins/square/grey.css',

    ];
    public $js = [
        'js/script.js',
        'js/global.js',
        'scripts/sliders/slider.js',
        'scripts/masonry.js',
        'scripts/parallax.min.js',
        'scripts/icheck.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
