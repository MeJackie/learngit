<?php
/**
 * Created by PhpStorm.
 * User: shixi_jianjian
 * Date: 2017/8/30
 * Time: 13:46
 */
use yii\helpers\Html;
?>

<p>You have entered the following information:</p>

<ul>
    <li><label>name: </label><?= Html::encode($model->name) ?></li>
    <li><label>email: </label><?= Html::encode($model->email) ?></li>
</ul>
