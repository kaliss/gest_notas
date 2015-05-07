<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MatriculasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matriculas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_matricula') ?>

    <?= $form->field($model, 'cod_matricula') ?>

    <?= $form->field($model, 'id_facultad') ?>

    <?= $form->field($model, 'curso') ?>

    <?= $form->field($model, 'semestre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
