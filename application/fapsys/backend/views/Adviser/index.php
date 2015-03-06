<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdviserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Advisers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adviser-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Adviser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'adviser_fname',
            'adviser_lname',
            'adviser_address',
            'adviser_contact',
            // 'adviser_uname',
            // 'adviser_password',
            // 'adviser_emailadd:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
