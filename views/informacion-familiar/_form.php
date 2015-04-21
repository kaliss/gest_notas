<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InformacionFamiliar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informacion-familiar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_est')->textInput() ?>

    <?= $form->field($model, 'cant_hermanas_est')->textInput() ?>

    <?= $form->field($model, 'cant_hermanos_est')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
