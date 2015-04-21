<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Profesiones */

$this->title = 'Creación de Profesiones';
$this->params['breadcrumbs'][] = ['label' => 'Profesiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesiones-create">

    <h1 class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
