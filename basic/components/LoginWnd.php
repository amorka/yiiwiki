<?php

namespace app\components;

use yii\base\Widget;
use app\models\LoginForm;

class LoginWnd extends Widget{
    
    public function  init(){
        parent::init();
    }
    
    public  function run (){
        $model= new LoginForm();
        return $this->render('loginwndview',['model' => $model,]);
    }
}
