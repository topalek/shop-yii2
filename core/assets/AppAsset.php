<?php
/**
 * @link      http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license   http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since  2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        /*'css/site.css',*/
        'css/flat-form.css',
        'css/fancySelect.css',
        'css/jquery.fancybox.css',
        'css/responsive-tabs.css',
        'css/allinone_bannerRotator.css',
        'css/perfect-scrollbar.min.css',
        'css/font-awesome.min.css',
        'css/minimal-menu.css',
        'css/styles.css',
    ];
    public $js = [
        'js/libs/prefixfree.min.js',
        'js/libs/modernizr.js',
        'js/libs/jquery-1.11.2.min.js',
        'js/libs/jquery-ui-1.11.4/jquery-ui.min.js',
        'js/libs/bootstrap.min.js',
        'js/libs/fancySelect.js',
        'js/libs/jquery.jcarousel.min.js',
        'js/jcarousel.responsive.js',
        'js/libs/jquery.raty-fa.js',
        'js/libs/jquery.sticky-kit.js',
        'js/libs/gmaps.js',
        'js/jspatch.js',
        'js/libs/jquery.responsiveTabs.min.js',
        'js/libs/jquery.fancybox.pack.js',
        'js/libs/jquery.ui.touch-punch.min.js',
        'js/libs/jquery.mousewheel.min.js',
        'js/libs/allinone_bannerRotator.js',
        'js/libs/perfect-scrollbar.min.js',
        'js/functions.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}