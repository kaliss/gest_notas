<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Horarios */

$this->title = 'Creación de Horarios: '. $CODGRUPO;
$this->params['breadcrumbs'][] = ['label' => 'Horarios', 'url' => ['indexhorario']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horarios-create">

    <h1 class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formhorario', [
        'modelHor' => $modelHor,
    ]) ?>

</div>
