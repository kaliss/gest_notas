<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parroquias */

$this->title = 'Actualizar Parroquia: ' . ' ' . $model->nombre_parroquia;
$this->params['breadcrumbs'][] = ['label' => 'Parroquias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_parroquia, 'url' => ['view', 'id' => $model->id_parroquia]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="parroquias-update">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
