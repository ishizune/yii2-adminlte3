<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/ishizune/yii2-adminlte3/blob/master/LICENSE
 * @link https://www.weblagoon.it
 */

namespace ishizune\adminlte3\assets;

class Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
    ];
    public $js = [
        'js/adminlte.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
