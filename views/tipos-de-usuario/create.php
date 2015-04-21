<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TiposDeUsuario */

$this->title = 'Creación de Tipos de Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Tipos de Usuario', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-de-usuario-create">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
