<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TiposDeGrupo */

$this->title = 'Actualizar Tipos de Grupo: ' . ' ' . $model->nombre_tipo_grupo;
$this->params['breadcrumbs'][] = ['label' => 'Tipos de Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_tipo_grupo, 'url' => ['view', 'id' => $model->id_tipo_grupo]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipos-de-grupo-update">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
