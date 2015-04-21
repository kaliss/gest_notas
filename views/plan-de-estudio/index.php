<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlanDeEstudioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Plan De Estudios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plan-de-estudio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Plan De Estudio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_plan',
            'id_asig',
            'id_facultad',
            'curso',
            'semestre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
