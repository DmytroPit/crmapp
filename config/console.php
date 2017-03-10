<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 01.03.2017
 * Time: 13:43
 */
return [
    'id' => 'crmapp-console',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => require (__DIR__ . '/db.php'),
    ],
];