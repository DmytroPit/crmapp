<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 01.03.2017
 * Time: 12:11
 */
define('YII_DEBUG', true);
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
ini_set('display_errors', true);
$config = require (__DIR__ . '/../config/web.php');
(new yii\web\Application($config))->run();
