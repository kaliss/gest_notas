<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TiposDeGrupo;
use app\models\Docentes;
use app\models\Asignaturas;

/* @var $this yii\web\View */
/* @var $model app\models\Grupos */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="grupos-form">
    <?php $form = ActiveForm::begin(); ?>
    <hr>
    <fieldset>
      <div class="imagen">
    	<div class="row">
  		    <div class="col-lg-4 col-lg-offset-4">
      		    <div class="formularios">
                    <?= $form->field($modelGru, 'cod_grupo')->textInput(['maxlength' => 50]) ?>

                    <?= $form->field($modelGru, 'id_tipo_grupo')->dropDownList(
                        ArrayHelper::map(TiposDeGrupo::find()->all(),
                        'id_tipo_grupo',
                        'nombre_tipo_grupo'))?>

                    <?= $form->field($modelGru, 'id_doc')->dropDownList(
                        ArrayHelper::map(Docentes::find()->all(),
                        'id_doc',
                        'docentes'))?>

                    <?= $form->field($modelGru, 'id_asig')->dropDownList(
                        ArrayHelper::map(Asignaturas::find()->all(),
                        'id_asig',
                        'nombre_asig')) ?>

                    <?= $form->field($modelGru, 'activo')->checkbox() ?>
  
                    <div class="form-group" align="right">
                  		<?= Html::submitButton('Siguiente', ['class' => $modelGru->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
              		  </div>
              </div>
      		</div>
  		</div>
      </div>
    </fieldset>
    <?php ActiveForm::end(); ?>
</div>
