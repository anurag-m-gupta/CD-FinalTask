<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace app\models;

use Yii;
use yii\base\Model;

class UserForm extends Model {
    public $name, $email;
    
    public function rules() {
        return [
            [['name', 'email'],'required'],
            ['email', 'email'],
        ];
                
    }
}