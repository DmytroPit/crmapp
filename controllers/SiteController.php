<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 01.03.2017
 * Time: 12:30
 */

namespace app\controllers;
use \yii\web\Controller;

class SiteController extends Controller{
    public function actionIndex(){
        return $this->render('homepage');
    }

    public function actionDocs(){
        return $this->render('docindex.md');
    }
}

