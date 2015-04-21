<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parientes */

$this->title = 'Update Parientes: ' . ' ' . $model->id_pariente;
$this->params['breadcrumbs'][] = ['label' => 'Parientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pariente, 'url' => ['view', 'id' => $model->id_pariente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parientes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
