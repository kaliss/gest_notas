<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parentezco */

$this->title = 'Actualizar Parentezco: ' . ' ' . $model->nombre_parentezco;
$this->params['breadcrumbs'][] = ['label' => 'Parentezcos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_parentezco, 'url' => ['view', 'id' => $model->id_parentezco]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="parentezco-update">

    <h1 class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
