<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
  <br><br>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="title-login-container">
            <h1 class="title-login" align="center"><?= Html::encode($this->title) ?></h1>
          </div>
          <div class="container-login">
            <h3><small>Complete los campos para continuar:</small></h3>
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'username') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
            <div class="form-group" align="right">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
