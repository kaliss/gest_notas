<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TiposDeUsuario */

$this->title = 'Actualizar Tipo de Usuario: ' . ' ' . $model->nombre_tipo_usuario;
$this->params['breadcrumbs'][] = ['label' => 'Tipos de Usuario', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_tipo_usuario, 'url' => ['view', 'id' => $model->id_tipo_usuario]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipos-de-usuario-update">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
