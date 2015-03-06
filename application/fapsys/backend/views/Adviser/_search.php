<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdviserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adviser-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'adviser_fname') ?>

    <?= $form->field($model, 'adviser_lname') ?>

    <?= $form->field($model, 'adviser_address') ?>

    <?= $form->field($model, 'adviser_contact') ?>

    <?php // echo $form->field($model, 'adviser_uname') ?>

    <?php // echo $form->field($model, 'adviser_password') ?>

    <?php // echo $form->field($model, 'adviser_emailadd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
