<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 14.03.2017
 * Time: 14:16
 */

class ServiceController extends \yii\web\Controller{

    public function actionYaml(){
        $models = ServiceRecord::find()->all();
        $data = array_map(function ($model) {return $model->attributes;}, $models);

        $response = Yii::$app->response;
        $response->format = \app\utilities\YamlResponseFormatter::FORMAT;
        $response->data = $data;

        return $response;
    }
}