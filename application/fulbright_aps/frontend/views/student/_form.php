<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'student_fname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'student_midname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'student_lname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'student_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'student_age')->textInput() ?>

    <?= $form->field($model, 'student_gender')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'student_birthdate')->textInput() ?>

    <?= $form->field($model, 'account_id')->textInput() ?>

    <?= $form->field($model, 'year_level_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
