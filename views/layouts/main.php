<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="rus" lang="rus">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="icon" href="images/favicons/favicon.ico">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="br-shadow"></div>
<div id="header">
    <div class="top container">
        <?php
        NavBar::begin([
            'brandLabel' => '<img src="/images/logo.png" class="logo" />',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Главная', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
                (Yii::$app->user->can('GodMode') || Yii::$app->user->can('admins') || Yii::$app->user->can('operator')) ? (
                ['label' => 'Management', 'url' => ['/management']]
                ) : (
                ['label' => '', 'url' => ['/management']]
                ),
                Yii::$app->user->can('user') ? (
                ['label' => 'My Account', 'url' => ['/management']]
                ) : (
                ['label' => '', 'url' => ['/management']]),
                Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->name . ')',
                        ['class' => 'btn btn-link']
                    )
                    . Html::endForm()
                    . '</li>'
                ),
            ],
        ]);
          ?>

        <?php
        NavBar::end();
        ?>
        <!--Пока скрыл потом норм натяну -->
        <div class="row hidden">
            <div class="col-xs-8 block ">
                <div class="col-xs-6 group">
                    <div class="dropdown  col-xs-4 ">
                        <a id="drop1" href="#" role="button" class="dropdown-toggle white" data-toggle="dropdown">Флаг <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Действие</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Другое действие</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Здесь еще что-то</a></li>
                        </ul>
                    </div>
                    <div class="dropdown  col-xs-4 ">
                        <a id="drop2" href="#" role="button" class="dropdown-toggle white" data-toggle="dropdown">СТРАНА <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Действие</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Другое действие</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Здесь еще что-то</a></li>
                        </ul>
                    </div>
                    <div class="dropdown  col-xs-4 ">
                        <a id="drop3" href="#" role="button" class="dropdown-toggle white" data-toggle="dropdown">RUB <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Действие</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Другое действие</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Здесь еще что-то</a></li>
                        </ul>
                    </div>
                </div>
                <div class="btn-group col-xs-5 float-right">
                    <div class="col-xs-5"><button type="button" class="btn blue ">Регистрация</button></div>
                    <div class="col-xs-5 float-right"><button type="button" class="btn green">Войти</button></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>

    <div class="clear"></div>
</div>
<div id="center">
 <?=$content?>
</div>
<!--Content-->
<div id="footer">
    <div class="top">
        <div class="container">
            <div class="col-xs-6 info-footer">
                <div>Будьте в курсе последних новостей и обновлений</div>
            </div>
            <div class="col-xs-6">
                <form method="post">
                    <div class="input-group col-xs-10 subscription">
                        <input type="text" class="form-control" placeholder="введите ваш email">
                                  <span class="input-group-btn">
                                    <button class="btn btn-success" type="button">Подписаться!</button>
                                  </span>
                    </div><!-- /input-group -->
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="center">
        <div class="container">
            <div class="menu">
                <div class="col-xs-3">
                    <div class="title-menu">СТРАНЫ И РЕГИОНЫ</div>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                </div>
                <div class="col-xs-3">
                    <div class="title-menu">СТРАНЫ И РЕГИОНЫ</div>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                </div>
                <div class="col-xs-3">
                    <div class="title-menu">СТРАНЫ И РЕГИОНЫ</div>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                </div>
                <div class="col-xs-3">
                    <div class="title-menu">СТРАНЫ И РЕГИОНЫ</div>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="bottom">
        <div class="cop">
            <p class="text-center">TOURBOOK — часть группы мирового лидера в сфере онлайн-туризма и сопутствующих услуг.</p>
            <p class="text-center">Copyright ©  <?= date('Y') ?>  TOURBOOK. Все права защищены.</p>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>