<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfesionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profesiones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fondo-index-grid">
    <div class="profesiones-index">
        <h1><?= Html::encode($this->title) ?><?= Html::a('Crear Profesiones', ['create'], ['class' => 'btn btn-success btn-index-right']) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <div class="fondo-grid">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    //'id_profesion',
                    'nombre_profesion',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>        
    </div>
</div>
