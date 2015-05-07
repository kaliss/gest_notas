<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matriculas */

$this->title = 'Actualizar Periodo Escolar: ' . ' ' . $model->cod_matricula;
$this->params['breadcrumbs'][] = ['label' => 'Periodos Escolares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cod_matricula, 'url' => ['view', 'id' => $model->id_matricula]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matriculas-update">

    <h1 class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
