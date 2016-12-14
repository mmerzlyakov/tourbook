<?php

use yii\bootstrap\Html;

if(\Yii::$app->language == 'ru-RU'):
    \Yii::$app->language='en-US';
    echo Html::a('Go to English', array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'en-US']
    ));
else:
    \Yii::$app->language='ru-RU';
    echo Html::a('Перейти на русский', array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'ru-RU']
    ));
endif;