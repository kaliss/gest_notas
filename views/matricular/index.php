<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Estudiantes;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MatriculasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matrículas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fondo-index-grid">
    <div class="matriculas-index">
        <h1><?= Html::encode($this->title) ?></h1>
        <hr>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <div class="formularios">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Crear Matrículas</h2>
                    <br>
                    <div class="col-lg-9">
                        <?php $form2 = ActiveForm::begin(); ?>
                        <fieldset>
                            <?= $form2->field($modelEst, 'id_est')->dropDownList(
                                ArrayHelper::map(Estudiantes::find()->all(),
                                'id_est',
                                'estudiantes'))?>
                            <div class="form-group"><?= Html::submitButton('Siguiente', ['class' => 'btn btn-success btn-index-right']) ?></div>
                        </fieldset>
                        <?php ActiveForm::end(); ?>
                    </div>
                    
                </div>
                <div class="col-lg-3" align="center">
                    <br><br>
                    <h3>Buscar Matrículas por Estudiante</h3>
                    <div class="form-group"><?= Html::a('Buscar', ['buscar'] , ['class' => 'btn btn-primary']) ?></div>
                </div>
            </div>
        </div>
    </div>
</div>