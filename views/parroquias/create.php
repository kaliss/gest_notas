<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Parroquias */

$this->title = 'Creación de Parroquias';
$this->params['breadcrumbs'][] = ['label' => 'Parroquias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parroquias-create">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
