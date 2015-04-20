<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Grade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'first_grading')->textInput() ?>

    <?= $form->field($model, 'second_grading')->textInput() ?>

    <?= $form->field($model, 'third_grading')->textInput() ?>

    <?= $form->field($model, 'fourth_grading')->textInput() ?>

    <?= $form->field($model, 'grade_remarks')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'grade_date_submitted')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'teacher_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
