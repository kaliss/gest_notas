<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Grupos */

$this->title = 'Actualizar Grupo: ' . ' ' . $modelGru->cod_grupo;
$this->params['breadcrumbs'][] = ['label' => 'Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $modelGru->cod_grupo, 'url' => ['view', 'id' => $modelGru->id_grupo]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="grupos-update">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'modelGru' => $modelGru,
    ]) ?>

</div>
