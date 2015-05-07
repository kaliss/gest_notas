<?php

class cnEquivalencia2Test extends \Codeception\TestCase\Test
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
	

    protected function _after()
    {
    }

    // tests
    public function testEntradaNoValida()
    {
        try {
            $this->asig->cod_asig = 'asig-002';
            $this->asig->nombre_asig = 'Asignatura de Prueba2';
            $this->asig->total_horas_asig = 'cincuenta';
            $this->asig->creditos_asig = 'cinco';

            $this->asig->save();

            $this->plan->id_asig = $this->asig->id_asig;
            $this->plan->id_facultad = 'Teologia';
            $this->plan->curso = 'uno';
            $this->plan->semestre = 'dos';

            $this->plan->save();

            $model = app\models\Asignaturas::find()->where(['cod_asig'=>$this->asig->cod_asig]);
            $this->assertEquals('Asignatura de Prueba2', $model->nombre_asig);
            
        } catch (Exception $e) {
            $this->assertTrue(app\models\Asignaturas::find()->where(['cod_asig'=>$this->asig->cod_asig])->count() == 0);
        }        
    }
}