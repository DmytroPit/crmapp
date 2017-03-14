<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 14.03.2017
 * Time: 15:36
 */
namespace app\assets;

use yii\web\AssetBundle;

class ApplicationUiAssetBundle extends AssetBundle{
    public $sourcePath = '@app/assets/ui';
    public $css = [
        'css/main.css'
    ];
    public $js = [
        'js/main.js'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset'
    ];
}

