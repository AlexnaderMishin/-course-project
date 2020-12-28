<?php
namespace app\models;
use yii\base\Model;

class SignUp extends Model
{
    public $username;
    
    public $password;
    public $passwordConf;

    public function rules()
    {
        return[
            [['username', 'password', 'passwordConf'], 'required', 'message' => 'Заполните поле'],
            ['username', 'unique', 'targetClass' =>  'app\models\User'],
            ['password', 'string', 'min' => 8, 'max' => 12],
            ['passwordConf', 'required'],
            ['passwordConf', 'compare', 'compareAttribute'=>'password', 'message'=>"Пароли не совпадают!" ]
        ];
    }
    
        public function signup(){
            
            $user = new  User();
            $user->username = $this->username;
           
            $user->password = $this->password;
            return $user->save();
        
        }
    
    
}