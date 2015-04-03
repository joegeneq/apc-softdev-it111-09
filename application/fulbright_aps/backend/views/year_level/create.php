<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\YearLevel */

$this->title = 'Create Year Level';
$this->params['breadcrumbs'][] = ['label' => 'Year Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="year-level-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
