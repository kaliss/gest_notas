<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Parientes */

$this->title = $model->id_pariente;
$this->params['breadcrumbs'][] = ['label' => 'Parientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parientes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pariente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pariente], [
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
            'id_pariente',
            'id_est',
            'nombre_pariente',
            'id_parentesco',
            'id_profesion',
        ],
    ]) ?>

</div>
