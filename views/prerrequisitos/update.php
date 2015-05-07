<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prerrequisitos */

$this->title = 'Update Prerrequisitos: ' . ' ' . $model->id_prerrequisito;
$this->params['breadcrumbs'][] = ['label' => 'Prerrequisitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_prerrequisito, 'url' => ['view', 'id' => $model->id_prerrequisito]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prerrequisitos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
