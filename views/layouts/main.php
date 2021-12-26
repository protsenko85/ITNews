<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'ITNews',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            '<li>'
            .Html::beginForm(['/site/index'], 'get')
            . Html::submitButton(
                'Home',
                ['class' => 'btn btn-link nav-button']
            )
            . Html::endForm()
            .'<li>',
            Yii::$app->user->isGuest ? (
                '<li>'
                .Html::beginForm(['/auth/login'], 'get')
                . Html::submitButton(
                    'Login',
                    ['class' => 'btn btn-link nav-button']
                )
                . Html::endForm()
                .'<li>'
            ) :
                '<li>'
                . Html::beginForm(['/user/user'], 'post')
                . Html::submitButton(
                    'User',
                    ['class' => 'btn btn-link nav-button']
                )
                . Html::endForm()
                . '<li>'
                . Html::beginForm(['/user/article'], 'post')
                . Html::submitButton(
                    'Article',
                    ['class' => 'btn btn-link nav-button']
                )
                . Html::endForm()
                . '</li>'
                . '<li>'
                . Html::beginForm(['/auth/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->name . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'

        ],
    ]);
    ?>
    <?php
    NavBar::end();
    ?>

<div class="container">

    <!--main content start-->

    <div class="main-content">

        <div class="container">


                <?= $content ?>


        </div>

    </div>

</div>

</div>

<footer class="footer">

    <div class="container">

        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>

    </div>

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
