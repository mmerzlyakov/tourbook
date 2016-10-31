<?php
namespace app\models;

use app\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $name;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            ['name', 'filter', 'filter' => 'trim'],
            ['name', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Such username already exists!'],
            ['name', 'string', 'min' => 2, 'max' => 255],

            ['email', 'required'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new \app\models\User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->setPassword($this->password);
        $user->generateAuthKey();


        if(!$user->save()){
            if(MY_DEBUG) {
                var_dump($user);
                var_dump($user->errors);
                die();
            }
        }

        $auth = Yii::$app->authManager;
        $authorRole = $auth->getRole('user');
        $auth->assign($authorRole, $user->getId());
        
        return $user->save() ? $user : null;
    }
}
