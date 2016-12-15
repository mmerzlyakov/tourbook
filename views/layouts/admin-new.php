<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
//$session = Yii::$app->session;

$lang = \Yii::$app->session->get("locale");

if(!\Yii::$app->user->isGuest) {
    $user_id = \Yii::$app->user->identity->getId();

    if (!empty($user_id)) {
        $user = \app\models\User::find()->where('id = ' . $user_id)->one();
        \Yii::$app->language = $user->locale;
    }
}
elseif(!empty($lang)) {
    \Yii::$app->language = $lang;
}

//var_dump($lang);
//var_dump(Yii::$app->language);die();


?>
<?php $this->beginPage() ?>
    <!--TEST-->
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="rus" lang="rus">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        <?= Html::csrfMetaTags() ?>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="icon" href="images/favicons/favicon.ico">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="br-shadow"></div>
    <div class="wrapper">
        <div id="header">
            <div class="top ">
                <?php
                NavBar::begin([
                    'brandLabel' => '<img src="/images/logo.png" class="logo" />',
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'navbar-inverse navbar-fixed-top',
                        'id'=>'navbar',
                    ],
                ]); ?>
                <div class="hidden-xs col-sm-5 col-md-3 group col-lg-push-4 col-md-push-3">
                    <div class="row">
                        <div class="dropdown">
                            <?php
                            $countiesFlags = \app\models\Country::find()->where('language = 1')->andWhere('status = 1')->all();

                            $flagsImages = [];
                            $index = 0;
                            foreach ($countiesFlags as $item){

                                if(empty($index))
                                    $index = $item->id;

                                $temp = \app\models\CountryFlags::find()->where('country_id = '.$item->id)->one();

                                $flagsImages[$item->id]['id'] = $item->id;
                                $flagsImages[$item->id]['name'] = $item->name;
                                $flagsImages[$item->id]['locale'] = $item->locale;

                                if(!empty($temp->path))
                                    $flagsImages[$item->id]['path'] = $temp->path;
                                else
                                    $flagsImages[$item->id]['path'] = "";

                                $flagsImages[$item->id]['currency'] = $item->currency;
                            }
                            ?>
                            <a href="#" role="button" class="dropdown-toggle white no-border" data-toggle="dropdown" data-placement="left" title="<?=\Yii::t('app','Language')?> ">

                                <img class="flag" src="/<?=$flagsImages[$index]['path']?>" width="30">
                                <?=\Yii::t('app',$flagsImages[$index]['name'])?><b class="caret"></b></a>

                            <ul class="dropdown-menu currency" role="menu" aria-labelledby="drop1">

                                <?php foreach($flagsImages as $item){ ?>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" ><img class="flag" width=30 src="/<?=$item['path']?>">
                                            <a href="#" onClick='return setLocale("<?=isset($item['locale']) ? $item['locale'] : ''?>");'><?=\Yii::t('app',$item['name'])?></a></li>
                                <?php } ?>
                            </ul>
                        </div>

                        <!-- div class="dropdown">
                            <a id="drop2" href="#" role="button" class="dropdown-toggle white" data-toggle="dropdown">СТРАНА <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Действие</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Другое действие</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Здесь еще что-то</a></li>
                            </ul>
                        </div -->
                        <div class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle white" data-toggle="dropdown" data-placement="right" title="Currency"><?=$flagsImages[$index]['currency']?><b class="caret"></b></a>

                            <ul class="dropdown-menu currency" role="menu" aria-labelledby="drop1">

                                <?php foreach($flagsImages as $item){ ?>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><?=$item['currency']?></a></li>
                                <?php } ?>
                            </ul>

                        </div>
                    </div>
                </div>
                <?php if(Yii::$app->user->isGuest): ?>
                    <div class="hidden-xs btn-group col-sm-3 col-md-2 float-right">
                        <div class="col-xs-12 white" style="padding: 14px 0px;"> <a class="white reg" href="/site/signup"><?=\Yii::t('app','Signup')?></a> / <a class="white login" href="/site/login"><?=\Yii::t('app','Login')?></a> </div>
                        <div class="clearfix visible-xs"></div>
                    </div>
                <?php else: ?>
                    <div class="hidden-xs btn-group col-xs-4 float-right">
                        <div class="user">
                            <div class="name"><?=\app\widgets\WBasket::widget(['model' => Yii::$app->user->identity->getId()]);?></div>
                            <div><a class="white" href="/management"><?=\Yii::t('app',Yii::$app->user->identity->name)?></a> / <a href="/site/logout" class="out white"><?=\Yii::t('app','Logout')?></a></div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="clear"></div>
                <div class="navigation visible-xs">
                    <div class="content-nav">
                        <div class="drows">
                            <div class="dropdown">
                                <?php
                                $countiesFlags = \app\models\Country::find()->where('language = 1')->andWhere('status = 1')->all();

                                $flagsImages = [];
                                $index = 0;
                                foreach ($countiesFlags as $item){

                                    if(empty($index))
                                        $index = $item->id;

                                    $temp = \app\models\CountryFlags::find()->where('country_id = '.$item->id)->one();

                                    $flagsImages[$item->id]['id'] = $item->id;
                                    $flagsImages[$item->id]['name'] = $item->name;
                                    $flagsImages[$item->id]['locale'] = $item->locale;

                                    if(!empty($temp->path))
                                        $flagsImages[$item->id]['path'] = $temp->path;
                                    else
                                        $flagsImages[$item->id]['path'] = "";

                                    $flagsImages[$item->id]['currency'] = $item->currency;
                                }


                                //     var_dump($flagsImages);die();

                                ?>

                                <a href="#" role="button" class="dropdown-toggle white no-border" data-toggle="dropdown">

                                    <?=\Yii::t('app','Language')?>  <img class="flag" src="/<?=$flagsImages[$index]['path']?>" width="30">
                                    <?=\Yii::t('app',$flagsImages[$index]['name'])?><b class="caret"></b></a>

                                <ul class="dropdown-menu currency" role="menu" aria-labelledby="drop1">

                                    <?php foreach($flagsImages as $item){ ?>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" ><img class="flag" width=30 src="/<?=$item['path']?>">
                                                <a href="#" onClick='return setLocale("<?=$item['locale']?>");'><?=\Yii::t('app',$item['name'])?></a></li>
                                    <?php } ?>
                                </ul>


                            </div>

                            <!-- div class="dropdown">
                                <a  href="#" role="button" class="dropdown-toggle white" data-toggle="dropdown">СТРАНА <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Действие</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Другое действие</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://bootstrap-ru.ru" target="_blank">Здесь еще что-то</a></li>
                                </ul>
                            </div -->
                            <div class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle white" data-toggle="dropdown"><?=$flagsImages[$index]['currency']?><b class="caret"></b></a>

                                <ul class="dropdown-menu currency" role="menu" aria-labelledby="drop1">

                                    <?php foreach($flagsImages as $item){ ?>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><?=$item['currency']?></a></li>
                                    <?php } ?>
                                </ul>

                            </div>
                        </div>
                        <?php if(Yii::$app->user->isGuest): ?>
                            <div class="login">
                                <a class="login white" href="/site/login"><?=\Yii::t('app','Login')?></a> / <a class="reg white" href="/site/signup"><?=\Yii::t('app','Signup')?> </a>
                            </div>
                        <?php else: ?>
                            <div class="login">
                                <?=\app\widgets\WBasket::widget(['model' => Yii::$app->user->identity->getId()]);?>
                                <a class=" login white" href="/management"><?=\Yii::t('app',Yii::$app->user->identity->name)?></a> / <a class="reg white" href="/site/logout"><?=\Yii::t('app','Logout')?> </a>
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
            <div class="container">

                <br><br><br><br>
                <?= Breadcrumbs::widget([
                    'homeLink' => ['label' => 'Tourbook management', 'url' => '/management'],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>


                <?=$content?>
            </div>
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
    </div>
    <?php
    // Mini basket;
    \yii\bootstrap\Modal::begin([
        'header' => '<h2>Корзина</h2>',
        'id' => 'basket-modal',
        'size' => 'modal-lg',
        'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                 <a href="/basket/payment" class="btn btn-success no-border" style="color:#fff;">Оформить заказ</a>'
    ]);

    ?>





    <?php

    //echo app\widgets\WBasketModal::widget();
    \yii\bootstrap\Modal::end();
    ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>