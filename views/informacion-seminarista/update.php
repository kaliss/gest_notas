<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InformacionSeminarista */

$this->title = 'Update Informacion Seminarista: ' . ' ' . $model->id_info_semi;
$this->params['breadcrumbs'][] = ['label' => 'Informacion Seminaristas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_info_semi, 'url' => ['view', 'id' => $model->id_info_semi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="informacion-seminarista-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
