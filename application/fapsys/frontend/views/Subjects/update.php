<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subjects */

$this->title = 'Update Subjects: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'grades_id' => $model->grades_id, 'adviser_id' => $model->adviser_id, 'student_id' => $model->student_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subjects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
