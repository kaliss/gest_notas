<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Grupos */

$this->title = 'Creación de Grupos';
$this->params['breadcrumbs'][] = ['label' => 'Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupos-create">

    <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
