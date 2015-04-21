<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InformacionFamiliarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informacion-familiar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_info_fami') ?>

    <?= $form->field($model, 'id_est') ?>

    <?= $form->field($model, 'cant_hermanas_est') ?>

    <?= $form->field($model, 'cant_hermanos_est') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
