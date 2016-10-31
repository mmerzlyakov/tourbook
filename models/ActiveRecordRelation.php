<?php

namespace app\models;

use app\models\Goods;
use app\models\GoodsVariations;
use app\models\Logs;
use Yii;

/**
 * This is the model class for table "goods_variations".
 *
 * @property integer $id
 * @property integer $good_id
 * @property string $code
 * @property string $full_name
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string $comission
 * @property integer $status
 */
class ActiveRecordRelation extends \yii\db\ActiveRecord
{
    public $uniqueHashString;
    public $uniqueHashParentString;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->uniqueHashString = uniqid();
    }

    public function setUniqueHashParentString($uniqueHashParentString){
        $this->uniqueHashParentString = $uniqueHashParentString;
    }

    public static function getAllVariationsQuery(){
        return GoodsVariations::find()
            ->leftJoin('goods','goods.id = goods_variations.good_id')
            ->leftJoin('shop_group_variant_link','shop_group_variant_link.product_id = goods.id')
            ->leftJoin('shop_group_related','shop_group_related.shop_group_id = shop_group_variant_link.shop_group_id')
            ->leftJoin('shops_stores','shops_stores.shop_id = shop_group_related.shop_id');
    }

    public static function getAllProductsQuery(){
        return Goods::find()
            ->leftJoin('shop_group_variant_link','shop_group_variant_link.product_id = goods.id')
            ->leftJoin('shop_group_related','shop_group_related.shop_group_id = shop_group_variant_link.shop_group_id')
            ->leftJoin('shops_stores','shops_stores.shop_id = shop_group_related.shop_id');
    }
    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub

        $log = new Logs();

        $log->user_id = Yii::$app->user->identity ? Yii::$app->user->identity->getId() : 0;
        $log->action = $insert ? 'Create' : 'Update';
        $log->shop_id = $this->formName() == 'Shops' ? $this->id : '';
        $log->store_id = $this->formName() == 'ShopsStores' ? $this->id : '';
        $log->good_id = $this->formName() == 'Goods' ? $this->id : '';
        $log->variation_id = $this->formName() == 'GoodsVariations' ? $this->id : '';
        $log->sql = var_export($this->toArray(),true);
        $log->save();
    }
}
