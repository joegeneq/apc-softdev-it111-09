<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Fulbright Science School/Backend Admin';
?>
<div class="site-index">

    <div class="jumbotron">
        

        <h2 id="admin">Welcome Admin</h2>

        
    </div>

    <div class="body-content" align="center">

     <?= Html::a('Add User', ['site/signup'], ['class'=>'btn btn-success']) ?>


     <!-- Section for Uploading and Editing of Gallery -->
     <?= Html::a('Edit Pictures for Gallery', ['gallery/index'], ['class'=>'btn btn-success']) ?>


      
  

     
    </div>
</div>
