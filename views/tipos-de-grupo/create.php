<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TiposDeGrupo */

$this->title = 'Creación de Tipos de Grupo';
$this->params['breadcrumbs'][] = ['label' => 'Tipos de Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-de-grupo-create">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
