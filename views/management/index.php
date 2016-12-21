<?php

\app\libs\Language::select();

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Nav;
use yii\widgets\Menu;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Management');
$this->params['breadcrumbs'][] = $this->title;
?>


<?php

if(\Yii::$app->user->can('GodMode') || \Yii::$app->user->can('admin')){
echo "<div class='row'>";
    echo "<div class='col-xs-12 col-sm-6'>";
        echo "<div class='col-xs-12 col-sm-6'>";
            echo "<h2>".Yii::t('app','Welcome to administrator home page')."</h2>";
            echo Menu::widget([
                'items' => [
                    // Important: you need to specify url as 'controller/action',
                    // not just as 'controller' even if default action is used.
                   // ['label' => 'Home', 'url' => ['site/index']],
                    // 'Products' menu item will be selected as long as the route is 'product/index'
                    ['label' => Yii::t('app','Tags management'), 'url' => ['tags/index'], 'items' => [
                        //['label' => 'New tags', 'url' => ['tags/create']],
                    ]],
                    ['label' => Yii::t('app','Countries management'), 'url' => ['country/index'], 'items' => [
                        //['label' => 'New country', 'url' => ['country/create']],
                    ]],
                    ['label' => Yii::t('app','Cities management'), 'url' => ['city/index'], 'items' => [
                        //['label' => 'New city', 'url' => ['city/create']],
                    ]],
                    ['label' => Yii::t('app','Booking management'), 'url' => ['booking/index'], 'items' => [
                        //['label' => 'New booking', 'url' => ['booking/create']],
                    ]],
                    ['label' => Yii::t('app','Booking Type'), 'url' => ['types/index'], 'items' => [
                        //['label' => 'New booking', 'url' => ['booking/create']],
                    ]],
                    ['label' => Yii::t('app','Orders management'), 'url' => ['orders/index'], 'items' => [
                    ]],
                    ['label' => Yii::t('app','Transactions management'), 'url' => ['transactions/index'], 'items' => [
                        //['label' => 'New transaction', 'url' => ['transactions/create']],
                        //['label' => 'New bonus transaction', 'url' => ['transactions/create-bonus']],
                    ]],
                    ['label' => Yii::t('app','Users management'), 'url' => ['user/index'], 'items' => [
                        //['label' => 'New user', 'url' => ['user/create']],
                    ]],
                    ['label' => Yii::t('app','Feedback'), 'url' => ['feedback/index']],
                    ['label' => Yii::t('app','Subscribe'), 'url' => ['subscribe/index']],
                    ['label' => Yii::t('app','Reports'), 'url' => ['reports/index']],
                    ['label' => Yii::t('app','Logout'), 'url' => ['site/logout']],
                ],
                'options'=>[
                    'class' => 'nav-menu-left'
                ],
            ]);
            echo "</div>";
        echo "<div class='col-xs-12 col-sm-6'>";
            echo "<h2>".Yii::t('app','Users Menu')."</h2>";
            echo Menu::widget([
                'items' => [
                    // Important: you need to specify url as 'controller/action',
                    // not just as 'controller' even if default action is used.
                    ['label' => Yii::t('app','My Account'), 'url' => ['site/index']],
                    ['label' => Yii::t('app','Booking'), 'url' => ['site/index']],
                    ['label' => Yii::t('app','Wish list'), 'url' => ['site/index']],
                    ['label' => Yii::t('app','Credits'), 'url' => ['site/index']],
                    ['label' => Yii::t('app','Invite friends'), 'url' => ['site/index']],
                    ['label' => Yii::t('app','Previews'), 'url' => ['site/index']],
                    ['label' => Yii::t('app','Settings'), 'url' => ['site/index']],
                    ['label' => Yii::t('app','Logout'), 'url' => ['site/logout']],

                ],
                'options'=>[
                    'class' => 'nav-menu-left'
                ],
            ]);
                echo "</div>";
    echo "</div>";
echo "</div>";

}

if(\Yii::$app->user->can('operator')){

echo "<h2>Welcome to operators's home page</h2>";

echo Menu::widget([
    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'Home', 'url' => ['site/index']],
        // 'Products' menu item will be selected as long as the route is 'product/index'
        ['label' => 'Country management', 'url' => ['country/index'], 'items' => [
            ['label' => 'New country', 'url' => ['country/create']],
        ]],
        ['label' => 'Cities management', 'url' => ['city/index'], 'items' => [
            ['label' => 'New city', 'url' => ['city/create']],
        ]],
        ['label' => 'Booking management', 'url' => ['booking/index'], 'items' => [
            ['label' => 'New booking', 'url' => ['booking/create']],
        ]],
        ['label' => 'Orders management', 'url' => ['orders/index'], 'items' => [
        ]],
        ['label' => 'Logout', 'url' => ['site/logout']],

    ],
    'options'=>[
        'class' => 'nav-menu-left'
    ],
]);

}


if(\Yii::$app->user->can('supplier')){

    echo "<h2>Welcome to operators's home page</h2>";

    echo Menu::widget([
        'items' => [
            // Important: you need to specify url as 'controller/action',
            // not just as 'controller' even if default action is used.
            ['label' => 'Home', 'url' => ['site/index']],
            // 'Products' menu item will be selected as long as the route is 'product/index'
            ['label' => 'Country management', 'url' => ['country/index'], 'items' => [
                ['label' => 'New country', 'url' => ['country/create']],
            ]],
            ['label' => 'Cities management', 'url' => ['city/index'], 'items' => [
                ['label' => 'New city', 'url' => ['city/create']],
            ]],
            ['label' => 'Booking management', 'url' => ['booking/index'], 'items' => [
                ['label' => 'New booking', 'url' => ['booking/create']],
            ]],
            ['label' => 'Logout', 'url' => ['site/logout']],
        ],
        'options'=>[
            'class' => 'nav-menu-left'
        ],
    ]);

}

?>

<br>

<?php

if(\Yii::$app->user->can('user')){

echo "<h2>Welcome to user's account home page</h2>";

echo Menu::widget([
    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'My Account', 'url' => ['site/index']],
        ['label' => 'Booking', 'url' => ['site/index']],
        ['label' => 'Wish list', 'url' => ['site/index']],
        ['label' => 'Credits', 'url' => ['site/index']],
        ['label' => 'Invite friends', 'url' => ['site/index']],
        ['label' => 'Previews', 'url' => ['site/index']],
        ['label' => 'Settings', 'url' => ['site/index']],
        ['label' => 'Logout', 'url' => ['site/logout']],

    ],
    'options'=>[
        'class' => 'nav-menu-left'
    ],
]);

}

?>

<!-- img width=50% src="/images/xzibit.jpg" -->
