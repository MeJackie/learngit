<?php
/**
 * Created by PhpStorm.
 * User: shixi_jianjian
 * Date: 2017/8/30
 * Time: 11:28
 */
namespace app\models;

use yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}

