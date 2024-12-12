<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Paolo\paridispari\Numero;

class NumeroTest extends TestCase
{
    public function testPariDispariConNumeroPari()
    {
        $numero = new Numero();
        $valore = 4;

        $this->assertTrue($numero->PariDispari($valore), "$valore dovrebbe essere pari.");
    }

    public function testPariDispariConNumeroDispari()
    {
        $numero = new Numero();
        $valore = 5;

        $this->assertFalse($numero->PariDispari($valore), "$valore dovrebbe essere dispari.");
    }

    public function testPariDispariConValoreNonIntero()
    {
        $numero = new Numero();
        $valore = "stringa";

        $this->assertFalse($numero->PariDispari($valore), "Valori non interi non sono validi.");
    }
}
