<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HorariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Horarios del Grupo: '.$CODGRUPO;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fondo-index-grid">
    <div class="horarios-index">
        <h1><?= Html::encode($this->title) ?><?= Html::a('Crear Horarios', ['createhorario', 'id'=>$IDGRUPO, 'cod'=>$CODGRUPO], ['class' => 'btn btn-success btn-index-right']) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <div class="fondo-grid">
            <?= GridView::widget([
                'dataProvider' => $dataProviderHor,
                //'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    //'id_horario',
                    //'id_grupo',
                    'hora_inicio',
                    'hora_fin',
                    'aula',

                    ['class' => 'yii\grid\ActionColumnDelete', 'template' => '{deletedetalle}'],
                ],
            ]); ?>
        </div>
        <?= Html::a('Finalizar', ['view', 'id'=>$IDGRUPO], ['class' => 'btn btn-primary btn-index-right']) ?>
        <br><br>
    </div>
</div>
