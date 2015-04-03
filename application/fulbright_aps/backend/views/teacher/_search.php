<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TeacherSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'teacher_fname') ?>

    <?= $form->field($model, 'teacher_midname') ?>

    <?= $form->field($model, 'teacher_lname') ?>

    <?= $form->field($model, 'teacher_address') ?>

    <?php // echo $form->field($model, 'teacher_age') ?>

    <?php // echo $form->field($model, 'teacher_gender') ?>

    <?php // echo $form->field($model, 'teacher_contact') ?>

    <?php // echo $form->field($model, 'teacher_birthdate') ?>

    <?php // echo $form->field($model, 'account_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
