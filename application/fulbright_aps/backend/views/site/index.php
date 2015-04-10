<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Fulbright Science School/Backend Admin';
?>
<div class="site-index">

    <div class="jumbotron">
        

        <h2>Welcome Admin</h2>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Reference</a></p>
    </div>

    <div class="body-content">

     <?= Html::a('Add User', ['site/signup'], ['class'=>'btn btn-success']) ?>
    </div>
</div>
