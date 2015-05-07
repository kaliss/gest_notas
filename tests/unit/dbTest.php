<?php


class dbTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $doc;

    protected function _before()
    {
        $this->doc = new app\models\Docentes;
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $this->doc->num_carnet_doc = '2013930102';
        $this->doc->nombres_doc = 'Armando José';
        $this->doc->apellidos_doc = 'Bustos';
        $this->doc->cedula_doc = '001-040596-0029T';
        $this->doc->telefono_doc = '85886032';
        $this->doc->email_doc = 'armanjbustos596@gmail.com';

        $carnet = $this->doc->num_carnet_doc;

        $this->doc->save();
        $model = app\models\Docentes::findOne($this->doc->id_doc);
        $this->assertEquals('Armando José', $model->nombres_doc);
    }

}