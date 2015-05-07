<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Matriculas */

$this->title = 'Creación de Periodos Escolares';
$this->params['breadcrumbs'][] = ['label' => 'Periodos Escolares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matriculas-create">

    <h1 class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
