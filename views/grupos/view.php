<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Grupos */

$this->title = 'Grupo: '.$modelGru->cod_grupo;
$this->params['breadcrumbs'][] = ['label' => 'Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
  <div class="grupos-view">
      <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>
      <hr>
      <fieldset>
        <div class="imagen">
        <div class="row">
          <div class="col-lg-6 col-lg-offset-3">
	          	<div class="formularios">
		            <?= DetailView::widget([
		                'model' => $modelGru,
		                'attributes' => [
		                    //'id_grupo',
		                    'cod_grupo',
		                    ['label'=>'Tipo de Grupo',
		                    'value'=>$modelGru->idTipoGrupo->nombre_tipo_grupo],
		                    ['label'=>'Docente',
		                    'value'=>$modelGru->idDoc->docentes],
		                    ['label'=>'Asignatura',
		                    'value'=>$modelGru->idAsig->nombre_asig],
		                    'activo:boolean',
		                ],
		            ]) ?>
		            <?= GridView::widget([
		                'dataProvider' => $dataProviderHor,
		                //'filterModel' => $searchModel,
		                'columns' => [
		                    //['class' => 'yii\grid\SerialColumn'],
		                    //'id_horario',
		                    //'id_grupo',
		                    'hora_inicio',
		                    'hora_fin',
		                    'aula',
		                ],
		            ]); ?>
		            <p align="right">
		                <?= Html::a('Actualizar', ['update', 'id' => $modelGru->id_grupo], ['class' => 'btn btn-primary']) ?>
		                <?= Html::a('Eliminar', ['delete', 'id' => $modelGru->id_grupo], [
		                    'class' => 'btn btn-danger',
		                    'data' => [
		                        'confirm' => '¿Está seguro de eliminar este Grupo?',
		                        'method' => 'post',
		                    ],
		                ]) ?>
		            </p>
	            </div>
          </div>
        </div>
      </div>
      </fieldset>
  </div>
