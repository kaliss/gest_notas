<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlanDeEstudio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plan-de-estudio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_asig')->textInput() ?>

    <?= $form->field($model, 'id_facultad')->textInput() ?>

    <?= $form->field($model, 'curso')->textInput() ?>

    <?= $form->field($model, 'semestre')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
