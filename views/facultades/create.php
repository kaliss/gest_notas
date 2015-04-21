<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Facultades */

$this->title = 'Creación de Facultades';
$this->params['breadcrumbs'][] = ['label' => 'Facultades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facultades-create">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
