<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Matriculas */

$this->title = $model->id_matricula;
$this->params['breadcrumbs'][] = ['label' => 'Matriculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matriculas-view">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>
    <hr>
    <fieldset>
	    <div class="imagen">
	        <div class="row">
	          <div class="col-lg-6 col-lg-offset-3">
	            <div class="formularios">
	            	<?= DetailView::widget([
					        'model' => $model,
					        'attributes' => [
					            'id_matricula',
					            'cod_matricula',
					            'id_facultad',
					            'curso',
					            'semestre',
					            'fecha_matricula',
					        ],
					    ]) ?>

				    <p align="right">
				        <?= Html::a('Update', ['update', 'id' => $model->id_matricula], ['class' => 'btn btn-primary']) ?>
				        <?= Html::a('Delete', ['delete', 'id' => $model->id_matricula], [
				            'class' => 'btn btn-danger',
				            'data' => [
				                'confirm' => 'Are you sure you want to delete this item?',
				                'method' => 'post',
				            ],
				        ]) ?>
				    </p>
				</div>
			</div>
		</div>		    
    </fieldset>

    

</div>
