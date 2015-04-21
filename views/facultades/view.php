<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Facultades */

$this->title = $model->nombre_facultad;
$this->params['breadcrumbs'][] = ['label' => 'Facultades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facultades-view">
  <h1 class="title-form" align="center"><?= Html::encode($this->title) ?></h1>
  <hr>
  <fieldset>
    <div class="imagen">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="formularios">
            <?= DetailView::widget([
              'model' => $model,
              'attributes' => [
                //'id_facultad',
                'nombre_facultad',
              ],
            ]) ?>
            <p align="right">
              <?= Html::a('Actualizar', ['update', 'id' => $model->id_facultad], ['class' => 'btn btn-primary']) ?>
              <?= Html::a('Eliminar', ['delete', 'id' => $model->id_facultad], [
                'class' => 'btn btn-danger',
                'data' => [
                  'confirm' => '¿Está seguro de eliminar esta Facultad?',
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
