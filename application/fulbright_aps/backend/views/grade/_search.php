<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GradeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grade-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_grading') ?>

    <?= $form->field($model, 'second_grading') ?>

    <?= $form->field($model, 'third_grading') ?>

    <?= $form->field($model, 'fourth_grading') ?>

    <?php // echo $form->field($model, 'grade_remarks') ?>

    <?php // echo $form->field($model, 'grade_date_submitted') ?>

    <?php // echo $form->field($model, 'student_id') ?>

    <?php // echo $form->field($model, 'teacher_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
