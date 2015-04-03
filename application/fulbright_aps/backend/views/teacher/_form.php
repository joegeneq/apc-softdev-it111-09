<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'teacher_fname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'teacher_midname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'teacher_lname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'teacher_address')->textInput(['maxlength' => 70]) ?>

    <?= $form->field($model, 'teacher_age')->textInput() ?>

    <?= $form->field($model, 'teacher_gender')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'teacher_contact')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'teacher_birthdate')->textInput() ?>

    <?= $form->field($model, 'account_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
