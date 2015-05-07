<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Prerrequisitos */

$this->title = $model->id_prerrequisito;
$this->params['breadcrumbs'][] = ['label' => 'Prerrequisitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prerrequisitos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_prerrequisito], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_prerrequisito], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_prerrequisito',
            'prerrequisito',
            'id_asig',
            'tipo_prerrequisito:boolean',
        ],
    ]) ?>

</div>
