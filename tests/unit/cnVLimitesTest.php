<?php

class cnVLimitesTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $est;
    protected $ar = [];

    protected function _before()
    {
	// A la variable protegida est, se le asigna el numero de carnet que se busca con la funcion findOne
        $this->est = app\models\Estudiantes::findOne(['num_carnet_est'=>'2013930012']);
        $this->ar[]=['id_est'=>1, 'lugar_estudio'=>'Colegio Público Salomón de la Selva', 'id_tipo_estudio'=>1];
        $this->ar[]=['id_est'=>1, 'lugar_estudio'=>'Colegio Público Salomón de la Selva', 'id_tipo_estudio'=>2];
        $this->ar[]=['id_est'=>1, 'lugar_estudio'=>'Universidad Centroamericana', 'id_tipo_estudio'=>3];
        $this->ar[]=['id_est'=>1, 'lugar_estudio'=>'INATEC', 'id_tipo_estudio'=>4];
    }

    protected function _after(){}

    // tests
    public function testFueraRangoMenor()
    {
	
        try {
            $this->assertEquals($this->est->id_est, $this->ar[-1]['id_est']);
        } catch (Exception $e) {
            $this->assertTrue($this->est->id_est == 1);
        }
    }
    public function testFueraRangoMayor()
    {
        try {
            $this->assertEquals($this->est->id_est, $this->ar[4]['id_est']);
        } catch (Exception $e) {
            $this->assertTrue($this->est->id_est == 1);
        }
    }
    public function testValoresLimites()
    {
        $this->assertEquals($this->est->id_est, $this->ar[0]['id_est']);
        $this->assertEquals($this->est->id_est, $this->ar[1]['id_est']);
        $this->assertEquals($this->est->id_est, $this->ar[2]['id_est']);
        $this->assertEquals($this->est->id_est, $this->ar[3]['id_est']);
        $conec = Yii::$app->db;
        $conec->createCommand()->batchInsert('formacion_academica', ['id_est','lugar_estudio','id_tipo_estudio'],$this->ar)->execute();
    }
}