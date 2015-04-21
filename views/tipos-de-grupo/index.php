<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TiposDeGrupoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipos de Grupo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fondo-index-grid">
    <div class="tipos-de-grupo-index">
        <h1><?= Html::encode($this->title) ?><?= Html::a('Crear Tipos de Grupo', ['create'], ['class' => 'btn btn-success btn-index-right']) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <div class="fondo-grid">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    //'id_tipo_grupo',
                    'nombre_tipo_grupo',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>    
        </div>
    </div>
</div>
