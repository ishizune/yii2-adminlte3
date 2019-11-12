<?php
/**
 * @copyright Copyright (c) 2019 Ishizune
 * @license https://github.com/ishizune/adminlte3/blob/master/LICENSE
 * @link https://www.weblagoon.it
 */

namespace ishizune\adminlte3\widgets\grid;

class GridViewAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/datatables/media/css';
    public $css = [
        'dataTables.bootstrap.css',
    ];
    public $js = [];
    public $depends = [
        'ishizune\adminlte3\assets\Asset',
    ];
}
