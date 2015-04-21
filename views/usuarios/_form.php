<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TiposDeUsuario;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>
    <hr>
    <fieldset>
      <div class="imagen">
        <div class="row">
          <div class="col-lg-4 col-lg-offset-4">
            <div class="formularios">

              <?= $form->field($model, 'id_tipo_usuario')->dropDownList(
                  ArrayHelper::map(TiposDeUsuario::find()->all(),
                  'id_tipo_usuario',
                  'nombre_tipo_usuario'))?>

              <?= $form->field($model, 'nombre_usuario')->textInput(['maxlength' => 25]) ?>

              <?= $form->field($model, 'email_usuario')->textInput(['maxlength' => 50]) ?>

              <?= $form->field($model, 'contrasena_usuario')->textInput(['maxlength' => 25]) ?>

              <div class="form-group" align="right">
                  <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
    <?php ActiveForm::end(); ?>

</div>
