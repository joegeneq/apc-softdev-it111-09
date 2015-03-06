<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Adviser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Advisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adviser-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'adviser_fname',
            'adviser_lname',
            'adviser_address',
            'adviser_contact',
            'adviser_uname',
            'adviser_password',
            'adviser_emailadd:email',
        ],
    ]) ?>

</div>
