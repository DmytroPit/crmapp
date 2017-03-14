<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 02.03.2017
 * Time: 12:25
 */
use yii\helpers\Html;

app\assets\ApplicationUiAssetBundle::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
        <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <title><?= Html::encode($this->title)?></title>
        <?php $this->head() ?>
        <?= Html::csrfMetaTags() ?>
    </head>
    <body>
        <?php $this->beginDody() ?>
            <div class="container">
                <?= $content; ?>
                <footer class="footer"><?= Yii::powered(); ?></footer>
            </div>
        <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
