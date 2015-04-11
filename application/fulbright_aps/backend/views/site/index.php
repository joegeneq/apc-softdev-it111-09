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
     <?= Html::a('Edit Pictures for Gallery', ['site/'], ['class'=>'btn btn-success']) ?>



     <!-- Section for Editing and Adding of Comments -->
     <?= Html::a('Edit Comments for Testimonials', ['site/'], ['class'=>'btn btn-success']) ?>


     
    </div>
</div>
