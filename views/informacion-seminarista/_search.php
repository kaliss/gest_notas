<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InformacionSeminaristaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informacion-seminarista-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_info_semi') ?>

    <?= $form->field($model, 'id_est') ?>

    <?= $form->field($model, 'id_parroquia') ?>

    <?= $form->field($model, 'fecha_ingreso_est') ?>

    <?= $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
