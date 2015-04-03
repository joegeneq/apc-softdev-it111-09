<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\YearLevelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Year Levels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="year-level-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Year Level', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'year_level_name',
            'section_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
