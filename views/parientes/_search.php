<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ParientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pariente') ?>

    <?= $form->field($model, 'id_est') ?>

    <?= $form->field($model, 'nombre_pariente') ?>

    <?= $form->field($model, 'id_parentezco') ?>

    <?= $form->field($model, 'id_profesion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
