<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Matriculas;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MatriculasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Creación de Matrículas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fondo-index-grid">
    <div class="matriculas-index">
        <h1><?= Html::encode($this->title) ?>: <i>Selección del Periodo de Estudio</i></h1>
        <hr>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <div class="formularios">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Estudiante: <?= Html::encode($NOMBRE) ?></h2>
                    <br>
                    <?php $form2 = ActiveForm::begin(); ?>
                    <fieldset>
                        <div class="col-lg-9">
                            <?= $form2->field($modelEst, 'id_matricula')->dropDownList(
                                ArrayHelper::map(Matriculas::find()->all(),
                                'id_matricula',
                                'informacion'))?>
                            <div class="form-group btn-index-right">
                                <?= Html::a('Cancelar', ['matricular/index'], ['class'=> 'btn btn-default']) ?>
                                <?= Html::submitButton('Siguiente', ['class' => 'btn btn-success']) ?>
                            </div>
                        </div>
                    </fieldset>
                    <?php ActiveForm::end(); ?>
                </div>   
            </div>
        </div>
    </div>
</div>