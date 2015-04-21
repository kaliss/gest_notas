<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InformacionSeminarista */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informacion-seminarista-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_est')->textInput() ?>

    <?= $form->field($model, 'id_parroquia')->textInput() ?>

    <?= $form->field($model, 'fecha_ingreso_est')->textInput() ?>

    <?= $form->field($model, 'observaciones')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
