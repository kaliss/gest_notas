<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormacionAcademica */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="formacion-academica-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_est')->textInput() ?>

    <?= $form->field($model, 'lugar_estudio')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'id_tipo_estudio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
