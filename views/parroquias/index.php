<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ParroquiasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parroquias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fondo-index-grid">
<div class="parroquias-index">

    <h1><?= Html::encode($this->title) ?><?= Html::a('Crear Parroquias', ['create'], ['class' => 'btn btn-success btn-index-right']) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<div class="fondo-grid">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_parroquia',
            'idDiocesis.nombre_diocesis',
            'nombre_parroquia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>
</div>
