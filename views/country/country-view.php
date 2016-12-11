<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = "About ".$model->name;
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Countries'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php

    //output images
    if(!empty($model->id)) {
        $images = \app\models\CountryImages::find()->where('country_id = ' . $model->id)->all();
        if (!empty($images)) {
            ?>
            
            <?php

            foreach ($images as $item) {
                echo "<img src='/" . $item->path . "' width=250 id='"
                    . $item->id
                    . "'>";
            }
        }
    }

    ?>
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
         //   'id',
            'name',
            'description:raw',
            'full_description:raw',
            'options:ntext',
           // 'status',
        ],
    ]) ?>

</div>
