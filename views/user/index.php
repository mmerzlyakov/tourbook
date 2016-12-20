<?php

\app\libs\Language::select();
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'first_name',
            'second_name',
            'last_name',
            [
                'attribute' => 'status',
                'content' => function($data){
                    return ($data['status']==1) ? 'Active' : 'Not active';
                },
            ],

            // 'phone',
            // 'email:email',
            // 'birthday',
            // 'bonus',
            // 'money',
            // 'created_at',
            // 'updated_at',
            // 'password_reset_token',
            // 'password_hash',
            // 'auth_key',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
