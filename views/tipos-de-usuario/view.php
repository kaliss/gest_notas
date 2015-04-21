<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TiposDeUsuario */

$this->title = $model->nombre_tipo_usuario;
$this->params['breadcrumbs'][] = ['label' => 'Tipos de Usuario', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-de-usuario-view">
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
                          //'id_tipo_usuario',
                          'nombre_tipo_usuario',
                      ],
                  ]) ?>
                  <p align="right">
                      <?= Html::a('Actualizar', ['update', 'id' => $model->id_tipo_usuario], ['class' => 'btn btn-primary']) ?>
                      <?= Html::a('Eliminar', ['delete', 'id' => $model->id_tipo_usuario], [
                          'class' => 'btn btn-danger',
                          'data' => [
                              'confirm' => '¿Está seguro de eliminar este "Tipo de Usuario"?',
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
