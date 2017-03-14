<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 14.03.2017
 * Time: 14:05
 */

namespace app\utilities;

use Symfony\Component\Yaml\Yaml;
use yii\web\ResponseFormatterInterface;

class YamlResponseFormatter implements ResponseFormatterInterface{
    const FORMAT = 'yaml';

    public function format($response)
    {
        $response->headers->set('Content-Type: application/yaml');
        $response->headers->set('Content-Disposition: inline');
        $response->content = Yaml::dump($response->data);
    }
}