<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TiposDeEstudio */

$this->title = 'Actualizar Tipo de Estudio: ' . ' ' . $model->nombre_tipo_estudio;
$this->params['breadcrumbs'][] = ['label' => 'Tipos de Estudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_tipo_estudio, 'url' => ['view', 'id' => $model->id_tipo_estudio]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipos-de-estudio-update">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
