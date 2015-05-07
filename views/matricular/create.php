<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Grupos;

/* @var $this yii\web\View */
/* @var $model app\models\Matriculas */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Creación de Matrículas';
$this->params['breadcrumbs'][] = ['label' => 'Matrículas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matriculas-create">
	<h1 class="title-form" align="center"><sup><?= Html::encode($NOMBRE) ?></sup> / <sub>Código de Matrícula:  <?= Html::encode($MATRI) ?></sub></h1>
	<div class="fondo-index-grid">
		<h1 class="title-form" align="center"><small><?= Html::encode($this->title) ?></small></h1>
	</div>
	<hr>
    <fieldset>
        <div class="imagen">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="formularios">
                        <div class="fondo-grid">
						    <?= GridView::widget([
				                'dataProvider' => $dataProviderCal,
				                'columns' => [
				                    ['class' => 'yii\grid\SerialColumn'],

				                    //'id_matricula',
				                    //'id_est',
				                    //'id_grupo',
				                    'idGrupo.cod_grupo',
				                    //'nota_final',

				                    ['class' => 'yii\grid\ActionColumnDelete', 'template' => '{deletedetalle}'],
				                ],
				            ]); ?>
					    </div>
					</div>
                </div>
            </div>
        </div>
    </fieldset>
	
	<nav class="navbar navbar-default navbar-fixed-bottom">
	  <div class="container">
	    <div class="collapse navbar-collapse">

	      	<div class="matriculas-form">
			    <?php $form = ActiveForm::begin(); ?>
				<form class="navbar-form">
					<br>
				<fieldset>
					<div class="row">
						<div class="col-lg-12">
							<div class="col-lg-4">
								<?= $form->field($modelCal, 'id_grupo')->dropDownList(
			                        ArrayHelper::map(Grupos::find()->all(),
			                        'id_grupo',
			                        'cod_grupo'))?>
							</div>
							<br>
							<div class="col-lg-2"><?= Html::submitButton('Agregar', ['class' => 'btn btn-success']) ?></div>
						</div>
					</div>
				</fieldset>
				</form>
			    <?php ActiveForm::end(); ?>
			</div>
	      
	    </div>
	  </div>
	</nav>

</div>

