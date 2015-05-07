<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parentesco */

$this->title = 'Actualizar Parentesco: ' . ' ' . $model->nombre_parentesco;
$this->params['breadcrumbs'][] = ['label' => 'Parentescos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_parentesco, 'url' => ['view', 'id' => $model->id_parentesco]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="parentesco-update">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
