<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Parentezco */

$this->title = 'Creación de Parentezcos';
$this->params['breadcrumbs'][] = ['label' => 'Parentezcos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentezco-create">

    <h1 class="title-form" align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
