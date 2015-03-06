<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Adviser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adviser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adviser_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'adviser_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'adviser_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'adviser_contact')->textInput() ?>

    <?= $form->field($model, 'adviser_uname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'adviser_password')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'adviser_emailadd')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
