<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RegistrarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registrars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Registrar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'registrar_fname',
            'registrar_midname',
            'registrar_lname',
            'registrar_address',
            // 'registrar_age',
            // 'registrar_gender',
            // 'registrar_contact',
            // 'registrar_birthdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
