<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormacionAcademicaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="formacion-academica-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_estudio') ?>

    <?= $form->field($model, 'id_est') ?>

    <?= $form->field($model, 'lugar_estudio') ?>

    <?= $form->field($model, 'id_tipo_estudio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
