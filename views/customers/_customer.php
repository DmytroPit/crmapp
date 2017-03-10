<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 02.03.2017
 * Time: 13:08
 */

echo \yii\widgets\DetailView::widget(
    [
        'model' => $model,
        'attributes' => [
            ['attribute' => 'name'],
            ['attribute' => 'birth_date', 'value' => $model->birth_date->format('Y-m-d')],
            'notes:text',
            ['label' => 'Phone Number', 'attribute' => 'phones.0.number']
        ]
    ]
);

