<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InformacionFamiliar */

$this->title = 'Update Informacion Familiar: ' . ' ' . $model->id_info_fami;
$this->params['breadcrumbs'][] = ['label' => 'Informacion Familiars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_info_fami, 'url' => ['view', 'id' => $model->id_info_fami]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="informacion-familiar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
