<?php

namespace app\components;

use yii\base\Widget;


class ListFirms extends Widget{
    
    public function  init(){
        parent::init();
    }
    
    public  function run (){
        
        return $this->render('default',['firm1'=>'Первая фирма','firm2'=>'Вторая фирма']);
    }
}
