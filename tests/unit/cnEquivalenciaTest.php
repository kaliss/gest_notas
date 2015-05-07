<?php

class cnEquivalenciaTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $asig;
    protected $plan;

    protected function _before()
    {
        $this->asig = new app\models\Asignaturas;
        $this->plan = new app\models\PlanDeEstudio;
    }

    protected function _after(){}

    // tests
    public function testEntradaValida()
    {
        $this->asig->cod_asig = 'asig-001';
        $this->asig->nombre_asig = 'Asignatura de Prueba1';
        $this->asig->total_horas_asig = '50';
        $this->asig->creditos_asig = '5';
        $this->asig->especificacion_asig = 'Ninguna';

        $this->asig->save();

        $this->plan->id_asig = $this->asig->id_asig;
        $this->plan->id_facultad = 1;
        $this->plan->curso = 1;
        $this->plan->semestre = 2;

        $this->plan->save();

        $model = app\models\Asignaturas::findOne($this->asig->id_asig);
        $this->assertEquals('Asignatura de Prueba1', $model->nombre_asig);
    }
}