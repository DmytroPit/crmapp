<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 03.03.2017
 * Time: 16:07
 */
use yii\helpers\Html;

echo Html::beginForm(['/customers'], 'get');
echo Html::label('Phone number to search:', 'phone_number');
echo Html::textInput('phone_number');
echo Html::submitButton('Search');
echo Html::endForm();