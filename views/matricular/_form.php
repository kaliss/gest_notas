<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Facultades;

/* @var $this yii\web\View */
/* @var $model app\models\Matriculas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matriculas-form">
    <?php $form = ActiveForm::begin(); ?>
	<hr>
	<fieldset>
		<div class="imagen">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<div class="formularios">
						<div class="row">
							<div class="col-lg-6">
								<?= $form->field($model, 'cod_matricula')->textInput(['maxlength' => 50]) ?>
							</div>
							<div class="col-lg-6">
								<?= $form->field($model, 'id_facultad')->dropDownList(
			                        ArrayHelper::map(Facultades::find()->all(),
			                        'id_facultad',
			                        'nombre_facultad'))?>
							</div>
							<div class="col-lg-6">
								<?= $form->field($model, 'curso')->textInput() ?>    
							</div>
							<div class="col-lg-6">
								<?= $form->field($model, 'semestre')->textInput() ?>
							</div>
							<div class="col-lg-12">
								<div class="form-group" align="right">
							        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</fieldset>
    <?php ActiveForm::end(); ?>
</div>
