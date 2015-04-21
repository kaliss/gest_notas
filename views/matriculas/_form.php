<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Facultades;
use dosamigos\datepicker\DatePicker;
use dosamigos\datetimepicker\DateTimePicker;

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
  		    		<div class="col-lg-4 col-lg-offset-4">
      		    		<div class="formularios">

						    <?= $form->field($model, 'cod_matricula')->textInput(['maxlength' => 50]) ?>

						    <!--<?= $form->field($model, 'id_facultad')->textInput() ?>-->
						    <?= $form->field($model, 'id_facultad')->dropDownList(
                        	ArrayHelper::map(Facultades::find()->all(),
                        	'id_facultad',
                        	'nombre_facultad'))?>

						    <?= $form->field($model, 'curso')->textInput() ?>

						    <?= $form->field($model, 'semestre')->textInput() ?>
						  
						    <?= $form->field($model, 'fecha_matricula')->widget(
                         	 DatePicker::className(), [
                           	'inline' => false,
                           	'clientOptions' => [
                              'autoclose' => true,
                              'format' => 'dd-M-yyyy'
                          ]
                  ]);?>

						    <div class="form-group" align="right">
						        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
						    </div>
						</div>
					</div>
				</div>		    
		    </div>
	
		</fieldset>
    <?php ActiveForm::end(); ?>
</div>

