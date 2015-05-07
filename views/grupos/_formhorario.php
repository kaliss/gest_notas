<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Horarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horarios-form">
    <?php $form = ActiveForm::begin(); ?>
	<hr>
	<fieldset>
		<div class="imagen">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="formularios">

						<?= $form->field($modelHor, 'hora_inicio')->widget(
                              DatePicker::className(), [
                               'inline' => false,
                               'clientOptions' => [
                                  'autoclose' => true,
                                  'format' => 'dd-M-yyyy'
                              ]
                      ]);?>
					    
					    <?= $form->field($modelHor, 'hora_fin')->widget(
                              DatePicker::className(), [
                               'inline' => false,
                               'clientOptions' => [
                                  'autoclose' => true,
                                  'format' => 'dd-M-yyyy'
                              ]
                      ]);?>

					    <?= $form->field($modelHor, 'aula')->textInput(['maxlength' => 50]) ?>

					    <div class="form-group" align="right">
					        <?= Html::submitButton('Crear', ['class'=>'btn btn-success']) ?>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</fieldset>
    <?php ActiveForm::end(); ?>
</div>
