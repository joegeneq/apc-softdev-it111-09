<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registrar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'registrar_fname') ?>

    <?= $form->field($model, 'registrar_midname') ?>

    <?= $form->field($model, 'registrar_lname') ?>

    <?= $form->field($model, 'registrar_address') ?>

    <?php // echo $form->field($model, 'registrar_age') ?>

    <?php // echo $form->field($model, 'registrar_gender') ?>

    <?php // echo $form->field($model, 'registrar_contact') ?>

    <?php // echo $form->field($model, 'registrar_birthdate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
