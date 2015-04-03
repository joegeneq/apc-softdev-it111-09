<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Registrar */

$this->title = 'Create Registrar';
$this->params['breadcrumbs'][] = ['label' => 'Registrars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
