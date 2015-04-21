<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlanDeEstudio */

$this->title = 'Update Plan De Estudio: ' . ' ' . $model->id_plan;
$this->params['breadcrumbs'][] = ['label' => 'Plan De Estudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_plan, 'url' => ['view', 'id' => $model->id_plan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plan-de-estudio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
