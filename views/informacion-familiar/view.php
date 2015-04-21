<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InformacionFamiliar */

$this->title = $model->id_info_fami;
$this->params['breadcrumbs'][] = ['label' => 'Informacion Familiars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informacion-familiar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_info_fami], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_info_fami], [
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
            'id_info_fami',
            'id_est',
            'cant_hermanas_est',
            'cant_hermanos_est',
        ],
    ]) ?>

</div>
