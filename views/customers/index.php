<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 02.03.2017
 * Time: 13:03
 */

echo \yii\widgets\ListView::widget(
    [
        'options' => [
            'class' => 'list-view',
            'id' => 'search_results'
        ],
        'itemView' => '_customer',
        'dataProvider' => $records
    ]
);