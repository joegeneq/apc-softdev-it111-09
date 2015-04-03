<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'student_fname') ?>

    <?= $form->field($model, 'student_midname') ?>

    <?= $form->field($model, 'student_lname') ?>

    <?= $form->field($model, 'student_address') ?>

    <?php // echo $form->field($model, 'student_age') ?>

    <?php // echo $form->field($model, 'student_gender') ?>

    <?php // echo $form->field($model, 'student_birthdate') ?>

    <?php // echo $form->field($model, 'account_id') ?>

    <?php // echo $form->field($model, 'year_level_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
