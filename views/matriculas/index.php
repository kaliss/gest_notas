<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MatriculasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matriculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fondo-index-grid">
<div class="matriculas-index">

<h1><?= Html::encode($this->title) ?><?= Html::a('Crear Matriculas', ['create'], ['class' => 'btn btn-success btn-index-right']) ?></h1>
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="fondo-grid">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_matricula',
            'cod_matricula',
            'id_facultad',
            'curso',
            'semestre',
            'fecha_matricula',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
</div>
</div>