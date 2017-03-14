<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 14.03.2017
 * Time: 13:20
 */

namespace app\utilities;

use yii\helpers\Markdown;
use yii\base\ViewRenderer;

class MarkdownRenderer extends ViewRenderer{
    public function render($view, $file, $params)
    {
        return Markdown::process(file_get_contents($file));
    }
}