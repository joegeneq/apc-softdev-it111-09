<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subjects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subjects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'subject_desc')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'subject_remarks')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'grades_id')->textInput() ?>

    <?= $form->field($model, 'adviser_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
