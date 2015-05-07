<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Parentesco */

$this->title = 'Creación de Parentesco';
$this->params['breadcrumbs'][] = ['label' => 'Parentescos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentesco-create">

    <h1 class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
