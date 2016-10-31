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
<!--TEST-->
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
    <div class="top">
        <?php
        NavBar::begin([
            'brandLabel' => '<img src="/images/logo.png" class="logo" />',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
                'id'=>'navbar',
            ],
        ]); ?>
            <!--Пока скрыл потом норм натяну -->
            <div class="hidden-xs col-xs-6 col-sm-5 group col-lg-push-1">
                <div class="row">
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
            </div>
            <?php if(Yii::$app->user->isGuest): ?>
            <div class="hidden-xs btn-group col-xs-4 float-right">
                <div class="col-xs-6 col-md-5 col-sm-4"> <a class="button btn btn-primary" href="/site/login">Регистрация</a> </div>
                <div class="col-xs-6 float-right col-md-5 col-lg-6 col-sm-5"> <a class="button btn btn-success green" href="/site/login">Войти</a></div>
                <div class="clearfix visible-xs"></div>
            </div>
            <?php else: ?>
            <div class="hidden-xs btn-group col-xs-4 float-right">
                <div class="user">
                    <div class="name"><?=Yii::$app->user->identity->name?> </div>
                   <div> <a class="white" href="/management">My Account</a> / <a href="/site/logout" class="out white">Выйти</a></div>
                </div>
            </div>
            <?php endif; ?>
            <div class="clear"></div>
            <div class="navigation visible-xs">
                <div class="content-nav">
                   <?php if(Yii::$app->user->isGuest): ?>
                       <div class="login">
                           <a class=" login white" href="#">Войти</a> / <a class="reg white" href="#">Регистрация </a>
                       </div>
                  <?php else: ?>
                       <div class="login">
                           <div class="name"><?=Yii::$app->user->identity->name?> </div>
                           <a class=" login white" href="/management">My Account</a> / <a class="reg white" href="/site/logout">Выйти </a>
                       </div>
                  <?php endif; ?>
                </div>
            </div>
        <?php
        NavBar::end();
        ?>


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
            <div class="col-xs-12 col-sm-6 info-footer">
                <div>Будьте в курсе последних новостей и обновлений</div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <form method="post">
                    <div class="input-group col-sm-12 col-sm-10 subscription">
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
                <div class="col-xs-6 col-sm-3 menu-footer">
                    <div class="title-menu">СТРАНЫ И РЕГИОНЫ</div>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                </div>
                <div class="col-xs-6 col-sm-3 menu-footer">
                    <div class="title-menu">СТРАНЫ И РЕГИОНЫ</div>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                </div>
                <div class="col-xs-6 col-sm-3 menu-footer">
                    <div class="title-menu">СТРАНЫ И РЕГИОНЫ</div>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                    <a class="white" href="#">Условия и положения</a>
                </div>
                <div class="col-xs-6 col-sm-3 menu-footer">
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