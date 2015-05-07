<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Parentesco */

$this->title = $model->nombre_parentesco;
$this->params['breadcrumbs'][] = ['label' => 'Parentescos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentesco-view">
    <h1 class="title-form" align="center"><?= Html::encode($this->title) ?></h1>
    <hr>
    <fieldset>
        <div class="imagen">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="formularios">
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                //'id_parentesco',
                                'nombre_parentesco',
                            ],
                        ]) ?>
                        <p align="right">
                            <?= Html::a('Actualizar', ['update', 'id' => $model->id_parentesco], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Eliminar', ['delete', 'id' => $model->id_parentesco], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => '¿Está seguro de eliminar este Parentesco?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</div>
