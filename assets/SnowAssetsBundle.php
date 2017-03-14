<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 14.03.2017
 * Time: 17:08
 */

namespace app\assets;


use yii\web\AssetBundle;

class SnowAssetsBundle extends AssetBundle
{
    public $sourcePath = '@app/assets/snow';
    public $css = ['snow.css'];
    public $depends = ['app\\assets\\ApplicationUiAssetBundle'];
}