<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Profesiones */

$this->title = 'Actualizar Profesiones: ' . ' ' . $model->nombre_profesion;
$this->params['breadcrumbs'][] = ['label' => 'Profesiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_profesion, 'url' => ['view', 'id' => $model->id_profesion]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="profesiones-update">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
