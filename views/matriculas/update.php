<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matriculas */

$this->title = 'Update Matriculas: ' . ' ' . $model->id_matricula;
$this->params['breadcrumbs'][] = ['label' => 'Matriculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_matricula, 'url' => ['view', 'id' => $model->id_matricula]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matriculas-update">

    <h1 class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
