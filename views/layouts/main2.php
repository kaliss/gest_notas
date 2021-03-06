<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Html;

$this->title = 'Sistema Gestor de Calificaciones';
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
      <?php
          NavBar::begin([
              'brandLabel' => '<span class="glyphicon glyphicon-list"></span> Nuestra Señora de Fátima',
              'brandUrl' => Yii::$app->homeUrl,
              'options' => ['class' => 'navbar-inverse navbar-fixed-top'],
          ]);
          echo Nav::widget([
              'options' => ['class' => 'navbar-nav navbar-right'],
              'items' => [
                  /*['label' => 'Académico', 'items' => [
                      //'<li class="dropdown-header">Dropdown Header</li>',
                      //'<li class="divider"></li>',
                      ['label' => 'Avance de Plan', 'url' => ['/avance-de-plan/index']],
                      ['label' => 'Matrículas', 'url' => ['/matriculas/index']],
                  ]],
                  ['label' => 'Planificación', 'items' => [
                      ['label' => 'Grupos', 'url' => ['/grupos/index']],
                      ['label' => 'Horarios', 'url' => ['/horarios/index']],
                      ['label' => 'Asignaturas', 'url' => ['/asignaturas/index']],
                      ['label' => 'Plan de Estudio', 'url' => ['/plan-de-estudio/index']],
                      ['label' => 'Prerrequisitos', 'url' => ['/prerrequisitos/index']],
                  ]],
                  ['label' => 'Registro', 'items' => [
                      ['label' => 'Estudiantes', 'url' => ['/estudiantes/index']],
                      ['label' => 'Formación Académica', 'url' => ['/formacion-academica/index']],
                      ['label' => 'Información Seminarista', 'url' => ['/informacion-seminarista/index']],
                      ['label' => 'Información Familiar', 'url' => ['/informacion-familiar/index']],
                      ['label' => 'Parientes', 'url' => ['/parientes/index']],
                      ['label' => 'Parentezco', 'url' => ['/parentezco/index']],
                      ['label' => 'Profesiones', 'url' => ['/profesiones/index']],
                      ['label' => 'Docentes', 'url' => ['/docentes/index']],
                  ]],
                  ['label' => 'Catálogos', 'items' => [
                      ['label' => 'Diócesis', 'url' => ['/diocesis/index']],
                      ['label' => 'Parroquias', 'url' => ['/parroquias/index']],
                      ['label' => 'Facultades', 'url' => ['/facultades/index']],
                      ['label' => 'Tipos de Estudio', 'url' => ['/tipos-de-estudio/index']],
                      ['label' => 'Tipos de Grupo', 'url' => ['/tipos-de-grupo/index']],
                  ]],*/
                  ['label' => 'Usuarios', 'items' => [
                      ['label' => 'Usuarios', 'url' => ['/usuarios/index']],
                      ['label' => 'Tipos de Usuario', 'url' => ['/tipos-de-usuario/index']],
                  ]],
                  //['label' => 'Home', 'url' => ['/site/index']],
                  ['label' => 'Acerca de', 'url' => ['/site/about']],
                  //['label' => 'Contact', 'url' => ['/site/contact']],
                  Yii::$app->user->isGuest ?
                      ['label' => 'Login', 'url' => ['/user/security/login']] :
                      ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                          'url' => ['/user/security/logout'],
                            'linkOptions' => ['data-method' => 'post']],
              ],
          ]);
          NavBar::end();
      ?>

        <div class="container-fluid container-main">
          <div class="bread" align="right">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'homeLink' => ['label' => 'Inicio', 'url' => Yii::$app->homeUrl],
            ]) ?>
          </div>
          <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <p class="pull-left">&copy; Seminario Interdiocesano Nacional "Nuestra Señora de Fátima" <?= date('Y') ?></p>
            <p class="pull-right">Universidad Centroamericana (UCA)</p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
