<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Parents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parents-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'parent_fname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'parent_midname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'parent_lname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'parent_address')->textInput(['maxlength' => 70]) ?>

    <?= $form->field($model, 'parent_age')->textInput() ?>

    <?= $form->field($model, 'parent_gender')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'parent_occupation')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'parent_contact')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'parent_email')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
