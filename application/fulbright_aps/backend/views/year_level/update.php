<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\YearLevel */

$this->title = 'Update Year Level: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Year Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="year-level-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
