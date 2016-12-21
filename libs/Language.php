<?php

namespace app\libs;


class Language
{

    /**
     *
     */
    public static function select()
    {
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
    }

}
