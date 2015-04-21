<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InformacionSeminarista */

$this->title = $model->id_info_semi;
$this->params['breadcrumbs'][] = ['label' => 'Informacion Seminaristas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informacion-seminarista-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_info_semi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_info_semi], [
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
            'id_info_semi',
            'id_est',
            'id_parroquia',
            'fecha_ingreso_est',
            'observaciones',
        ],
    ]) ?>

</div>
