<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InformacionSeminaristaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Informacion Seminaristas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informacion-seminarista-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Informacion Seminarista', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_info_semi',
            'id_est',
            'id_parroquia',
            'fecha_ingreso_est',
            'observaciones',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
