<?php

namespace nikolaevconstantin\yii2kladronestring\assets;

use yii\web\AssetBundle;

/**
 * Class KladrAsset
 *
 * @package common\components\kladr\assets
 */
class KladrAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower-asset/jquery.kladr';
    public $css = [
        'jquery.kladr.min.css'
    ];
    public $js = [
        'jquery.kladr.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
