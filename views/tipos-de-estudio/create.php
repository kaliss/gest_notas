<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TiposDeEstudio */

$this->title = 'Creación de Tipos de Estudio';
$this->params['breadcrumbs'][] = ['label' => 'Tipos de Estudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-de-estudio-create">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
