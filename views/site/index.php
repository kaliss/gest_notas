<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1 class="text-center text-success">Sistema Gestor de Calificaciones</h1>
        <h2 class="text-center"><small>Seminario Interdiocesano Nacional "Nuestra Señora de Fátima"</small></h2>

        <!--<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>
    <hr>

    <div class="row">
      <div class="panel-content">
        <div class="col-lg-4">
          <div class="panel panel-success panel-main">
            <div class="panel-body">
              <h4 class="text-center text-panel-main">Académico</h4>
              <hr>
              <ul id="navigationMenu">
                  <li><?= Html::a('<span>Calificaciones</span>',['calificaciones/index'],['class'=>'home','id'=>'calific']) ?></li>
                  <li><?= Html::a('<span>Matrículas</span>',['matriculas/index'],['class'=>'home','id'=>'matriculas']) ?></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="panel panel-success panel-main">
            <div class="panel-body">
              <h4 class="text-center text-panel-main">Planificación</h4>
              <hr>
              <ul id="navigationMenu">
                  <li><?= Html::a('<span>Grupos</span>',['grupos/index'],['class'=>'home','id'=>'grupos']) ?></li>
                  <li><?= Html::a('<span>Asignaturas</span>',['asignaturas/index'],['class'=>'home','id'=>'asignaturas']) ?></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="panel panel-success panel-main">
            <div class="panel-body">
              <h4 class="text-center text-panel-main">Registro</h4>
              <hr>
              <ul id="navigationMenu">
                  <li><?= Html::a('<span>Estudiantes</span>',['estudiantes/index'],['class'=>'home','id'=>'estudiantes']) ?></li>
                  <li><?= Html::a('<span>Docentes</span>',['docentes/index'],['class'=>'home','id'=>'docentes']) ?></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="panel panel-success panel-main">
            <div class="panel-body">
              <h4 class="text-center text-panel-main">Catálogos</h4>
              <hr>
              <div class="col-lg-3">
                <ul id="navigationMenu">
                  <li><?= Html::a('<span>Diócesis</span>',['diocesis/index'], ['class'=>'home','id'=>'diocesis']) ?></li>
                  <li><?= Html::a('<span>Parroquias</span>',['parroquias/index'], ['class'=>'home','id'=>'parroquias']) ?></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <ul id="navigationMenu">
                  <li><?= Html::a('<span>Profesiones</span>',['profesiones/index'], ['class'=>'home','id'=>'profesiones']) ?></li>
                  <li><?= Html::a('<span>Parentezco</span>',['parentezco/index'],['class'=>'home','id'=>'parentezco']) ?></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <ul id="navigationMenu">
                  <li><?= Html::a('<span>Tipos de Estudio</span>',['tipos-de-estudio/index'], ['class'=>'home','id'=>'tipestudio']) ?></li>
                  <li><?= Html::a('<span>Tipos de Grupo</span>',['tipos-de-grupo/index'], ['class'=>'home','id'=>'tipgrupo']) ?></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <ul id="navigationMenu">
                  <li><?= Html::a('<span>Facultades</span>',['facultades/index'],['class'=>'home','id'=>'facultades']) ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!--<div class="row">
      <div class="panel-content">
        <div class="col-lg-4">
          <div class="panel panel-success panel-main">
            <div class="panel-body">
              <h4 class="text-center text-panel-main">Académico</h4>
              <div class="col-lg-6">
                  <?= Html::a('
                  <div class="panel panel-success panel-sec">
                      <div class="panel-body">
                          <h3 class="text-center">
                              <span class="glyphicon glyphicon-list-alt"><h5 class="text-panel-sec">Calificaciones</h5></h3></span>
                          </h3>
                      </div>
                  </div>
                  ',['calificaciones/index']) ?>
                  
              </div>
              <div class="col-lg-6">
                  <div class="panel panel-success panel-sec">
                      <div class="panel-body">
                          <h3 class="text-center">
                              <span class="glyphicon glyphicon-th-list"></span>
                          </h3>
                          <h4 class="text-center">
                            <?= Html::a('Matrículas',['matriculas/index']) ?>
                          </h4>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="panel panel-success panel-main">
            <div class="panel-body">
              <h4 class="text-center">Planificación</h4>
              <div class="col-lg-6">
                  <div class="panel panel-success panel-sec">
                      <div class="panel-body">
                          <h3 class="text-center">
                              <span class="glyphicon glyphicon-th"></span>
                          </h3>
                          <h4 class="text-center">
                            <?= Html::a('Grupos',['grupos/index']) ?>
                          </h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="panel panel-success panel-sec">
                      <div class="panel-body">
                          <h3 class="text-center">
                              <span class="glyphicon glyphicon-book"></span>
                          </h3>
                          <h4 class="text-center">
                            <?= Html::a('Asignaturas',['asignaturas/index']) ?>
                          </h4>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="panel panel-success panel-main">
            <div class="panel-body">
              <h4 class="text-center">Registro</h4>
              <div class="col-lg-6">
                  <div class="panel panel-success panel-sec">
                      <div class="panel-body">
                          <h3 class="text-center">
                              <span class="glyphicon glyphicon-education"></span>
                          </h3>
                          <h4 class="text-center">
                            <?= Html::a('Estudiantes',['estudiantes/index']) ?>
                          </h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="panel panel-success panel-sec">
                      <div class="panel-body">
                          <h3 class="text-center">
                              <span class="glyphicon glyphicon-user"></span>
                          </h3>
                          <h4 class="text-center">
                            <?= Html::a('Docentes',['docentes/index']) ?>
                          </h4>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel-content">
        <div class="col-lg-12">
          <div class="panel panel-success panel-main">
            <div class="panel-body">
              <h4 class="text-center">Catálogos</h4>
              <div class="col-lg-2 col-lg-offset-1">
                  <div class="panel panel-success panel-sec">
                      <div class="panel-body">
                          <h3 class="text-center">
                              <span class="glyphicon glyphicon-edit"></span>
                          </h3>
                          <h4 class="text-center">
                            <?= Html::a('Diócesis',['diocesis/index']) ?>
                          </h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="panel panel-success panel-sec">
                      <div class="panel-body">
                          <h3 class="text-center">
                              <span class="glyphicon glyphicon-edit"></span>
                          </h3>
                          <h4 class="text-center">
                            <?= Html::a('Parroquias',['parroquias/index']) ?>
                          </h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="panel panel-success panel-sec">
                      <div class="panel-body">
                          <h3 class="text-center">
                              <span class="glyphicon glyphicon-edit"></span>
                          </h3>
                          <h4 class="text-center">
                            <?= Html::a('Facultades',['facultades/index']) ?>
                          </h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="panel panel-success panel-sec">
                      <div class="panel-body">
                          <h3 class="text-center">
                              <span class="glyphicon glyphicon-edit"></span>
                          </h3>
                          <h4 class="text-center">
                            <?= Html::a('Tipos de Estudio',['tipos-de-estudio/index']) ?>
                          </h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="panel panel-success panel-sec">
                      <div class="panel-body">
                          <h3 class="text-center">
                              <span class="glyphicon glyphicon-edit"></span>
                          </h3>
                          <h4 class="text-center">
                            <?= Html::a('Tipos de Grupo',['tipos-de-grupo/index']) ?>
                          </h4>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
</div>
