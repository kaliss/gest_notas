<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prerrequisitos */

$this->title = 'Create Prerrequisitos';
$this->params['breadcrumbs'][] = ['label' => 'Prerrequisitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prerrequisitos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
