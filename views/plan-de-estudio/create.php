<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PlanDeEstudio */

$this->title = 'Create Plan De Estudio';
$this->params['breadcrumbs'][] = ['label' => 'Plan De Estudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plan-de-estudio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
