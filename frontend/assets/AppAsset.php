<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/LineIcons.3.0.css',
        'css/tiny-slider.css',
        'css/glightbox.min.css',
        'css/main.css',
    ];
    public $js = [
        ['js/tiny-slider.js', 'position' => View::POS_HEAD],
        ['js/glightbox.min.js', 'position' => View::POS_HEAD],
        ['js/main.js', 'position' => View::POS_HEAD],
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
