<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\InformacionFamiliar */

$this->title = 'Create Informacion Familiar';
$this->params['breadcrumbs'][] = ['label' => 'Informacion Familiars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informacion-familiar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
