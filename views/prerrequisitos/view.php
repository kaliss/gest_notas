<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Prerrequisitos */

$this->title = $model->id_asig;
$this->params['breadcrumbs'][] = ['label' => 'Prerrequisitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prerrequisitos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_asig' => $model->id_asig, 'prerrequisito' => $model->prerrequisito], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_asig' => $model->id_asig, 'prerrequisito' => $model->prerrequisito], [
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
            'id_asig',
            'prerrequisito',
            'tipo_prerrequisito:boolean',
        ],
    ]) ?>

</div>
