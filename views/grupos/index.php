<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GruposSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grupos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fondo-index-grid">
<div class="grupos-index">

    <h1><?= Html::encode($this->title) ?><?= Html::a('Crear Grupos', ['create'], ['class' => 'btn btn-success btn-index-right']) ?></h1>
    
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="fondo-grid">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_grupo',
            'cod_grupo',
            'idTipoGrupo.nombre_tipo_grupo',
            'idDoc.docentes',
            'idAsig.nombre_asig',
            'activo:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
</div>
</div>
