<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Registrar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registrar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'registrar_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'registrar_midname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'registrar_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'registrar_address')->textInput(['maxlength' => 70]) ?>

    <?= $form->field($model, 'registrar_age')->textInput() ?>

    <?= $form->field($model, 'registrar_gender')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'registrar_contact')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'registrar_birthdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
