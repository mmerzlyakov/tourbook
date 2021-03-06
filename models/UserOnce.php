<?php
namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 * @property integer $city_id
 *
 */

//class User extends ActiveRecordRelation implements IdentityInterface
class UserOnce extends \yii\db\ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_FULL_DELETED = -1;
    const STATUS_ACTIVE = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
//            [['name','email','password'],'required'],
            //[['name','email','password_hash'],'required'],
            //[['name', 'first_name', 'second_name', 'last_name', 'phone', 'email', 'birthday', 'bonus', 'money', 'created_at', 'updated_at', 'password_reset_token', 'password_hash', 'auth_key'], 'required'],

            [['birthday', 'bonus', 'money', 'created_at', 'updated_at', 'status'], 'integer'],
            [['name', 'first_name', 'second_name', 'last_name', 'email', 'password', 'password_reset_token', 'password_hash', 'auth_key'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            [['locale'], 'string', 'max' => 5],
            [['phone'], 'unique'],
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED,self::STATUS_FULL_DELETED]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'first_name' => Yii::t('app', 'First Name'),
            'second_name' => Yii::t('app', 'Second Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'birthday' => Yii::t('app', 'Birthday'),
            'bonus' => Yii::t('app', 'Bonus'),
            'money' => Yii::t('app', 'Money'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'password' => Yii::t('app', 'Password Registration'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'locale' => Yii::t('app', 'Locale'),
            'status' => Yii::t('app', 'Status'),
        ];
    }


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($name)
    {
        return static::findOne(['name' => $name, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findByPhone($phone)
    {
        if(empty(static::findOne(['phone' => $phone, 'status' => self::STATUS_ACTIVE]))){
            return static::findOne(['phone' => '+7'.$phone, 'status' => self::STATUS_ACTIVE]);
        }
        else
            return static::findOne(['phone' => $phone, 'status' => self::STATUS_ACTIVE]);
    }


    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        $validatePassword = false;

        if(!isset($this->password_hash) || empty($this->password_hash)){

            if(md5('%'.$password.'%') == $this->password){
                $validatePassword = true;

                $this->password_hash = Yii::$app->security->generatePasswordHash($password);
                $this->auth_key = Yii::$app->security->generateRandomString();

                $allRoles = \Yii::$app->authManager->getRolesByUser($this->id);

                if(!isset($allRoles) || empty($allRoles)){
                    $auth = Yii::$app->authManager;
                    $userRole = $auth->getRole('user');
                    $auth->assign($userRole, $this->id);
                }

                if(!$this->save()){

                    //print_r($this->errors);die();
                };
            }
        }else{
            $validatePassword = Yii::$app->security->validatePassword($password, $this->password_hash);
        }

        return $validatePassword;
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public function getUsersPays(){
        return $this->hasMany(Transactions::className(), ['id' => 'user_id']);
    }

    public function getPromoCodes(){
        return Codes::find()->where(['user_id' => $this->id])->all();
    }

    //maybe in future we'll try to use thats one


    /*
     public function setDiscountPercent(){
 //        $this->discountPercent = $this->basket->promoCodePercent;
     }

     public function getCards(){
 //        return UsersCards::find()->where(['user_id' => $this->id])->all();
     }             */
    /*
       public function getDiscount(){
           return $this->basket ? $this->basket->promoCodePercent : 0;
       }

       public function setDiscountPercentValue($value){

       }

       public function getBasket(){
   //        return $this->hasOne(BasketLg::className(), ['user_id' => 'id'])->where(['basket.status' => 0]);
   //        return (new BasketLg())->findCurrentBasket();
       }
             */


}
