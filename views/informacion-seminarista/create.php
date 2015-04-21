<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\InformacionSeminarista */

$this->title = 'Create Informacion Seminarista';
$this->params['breadcrumbs'][] = ['label' => 'Informacion Seminaristas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informacion-seminarista-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
