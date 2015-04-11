<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Fulbright Science School/Backend Admin';
?>
<div class="site-index">

    <div class="jumbotron">
        

        <h2 id="admin">Welcome Admin</h2>

        
    </div>

    <div class="body-content">

     <?= Html::a('Add User', ['site/signup'], ['class'=>'btn btn-success']) ?>
    </div>
</div>
