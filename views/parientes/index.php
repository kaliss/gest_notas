<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ParientesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parientes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Parientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pariente',
            'id_est',
            'nombre_pariente',
            'id_parentezco',
            'id_profesion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
