
<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 01.03.2017
 * Time: 13:37
 */
define('YII_DEBUG', true);

require (__DIR__ . '/vendor/autoload.php');
require (__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

$config = require (__DIR__ . '/config/console.php');

$application = new yii\console\Application($config);
$exitCode = $application->run();
exit($exitCode);