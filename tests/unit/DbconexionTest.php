<?php


class DbconexionTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function conection(){
      $conection = new \yii\db\Connection([
        'dsn'=> 'mysql:host=localhost;dbname=seminariointerdiocesano',
        'user'=> 'root',
        'password'=> 'root',
        ]);
        $conection->open();
        return connection_status();
    }
    public function testconection(){
      $this->assertEquals(connection_status(), 0);
    }
    public function testMe()
    {
        $doc = new \app\models\Docentes();
    }

}
