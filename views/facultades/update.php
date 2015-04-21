<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Facultades */

$this->title = 'Actualizar Facultad: ' . ' ' . $model->nombre_facultad;
$this->params['breadcrumbs'][] = ['label' => 'Facultades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_facultad, 'url' => ['view', 'id' => $model->id_facultad]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="facultades-update">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
