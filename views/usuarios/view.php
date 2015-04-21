<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */

$this->title = $model->nombre_usuario;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarios-view">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <hr>
    <fieldset>
      <div class="imagen">
        <div class="row">
          <div class="col-lg-6 col-lg-offset-3">
              <div class="formularios">


      <?= DetailView::widget([
          'model' => $model,
          'attributes' => [
              //'id_usuario',
              'idTipoUsuario.nombre_tipo_usuario',
              'nombre_usuario',
              'email_usuario:email',
              'contrasena_usuario',
          ],
      ]) ?>

    <p align="right">
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_usuario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_usuario], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro de eliminar este Usuario?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
            </div>
          </div>
        </div>
      </div>
  </fieldset>


</div>
