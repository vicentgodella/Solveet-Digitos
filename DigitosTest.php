<?php
require_once('Digitos.php');

class DigitosTest extends PHPUnit_Framework_TestCase
{
    private $digitos;

    protected function setUp()
    {
        $this->digitos = new Digitos();
        $this->digitos->generaSecuencia();
    }

    public function testPrimeraPosicionDevuelve20CuandoNEs15()
    {
        $this->assertEquals(20, $this->digitos->primeraPosicion(15));
    }

    public function testPrimeraPosicionDevuelve3CuandoNEs34()
    {
        $this->assertEquals(3, $this->digitos->primeraPosicion(34));
    }

    public function testPrimeraPosicionDevuelve73CuandoNEs142()
    {
        $this->assertEquals(73, $this->digitos->primeraPosicion(142));
    }

    public function testPrimeraPosicionDevuelve12CuandoNEs111()
    {
        $this->assertEquals(12, $this->digitos->primeraPosicion(111));
    }
}
?>