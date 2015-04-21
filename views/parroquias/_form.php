<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Diocesis;

/* @var $this yii\web\View */
/* @var $model app\models\Parroquias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parroquias-form">

    <?php $form = ActiveForm::begin(); ?>
    <hr>
    <fieldset>
      <div class="imagen">
        <div class="row">
          <div class="col-lg-4 col-lg-offset-4">
            <div class="formularios">
              <?= $form->field($model, 'id_diocesis')->dropDownList(
                ArrayHelper::map(Diocesis::find()->all(),
                'id_diocesis',
                'nombre_diocesis')) ?>

                <?= $form->field($model, 'nombre_parroquia')->textInput(['maxlength' => 50]) ?>

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
