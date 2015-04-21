<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormacionAcademicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Formacion Academicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formacion-academica-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Formacion Academica', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_estudio',
            'id_est',
            'lugar_estudio',
            'id_tipo_estudio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
