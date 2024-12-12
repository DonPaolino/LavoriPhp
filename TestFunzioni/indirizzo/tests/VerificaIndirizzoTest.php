<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Paolo\indirizzo\VerificaIndirizzo;


class VerificaIndirizzoTest extends TestCase
{
    public function testIndirizzoStringValido()
    {
        $verifica = new VerificaIndirizzo();
        $this->assertTrue($verifica->IndirizzoValido("Via Roma, 1"));
        //verifica che venga restituito true quando viene chiamata la stringa "Via Roma, 1".
    }

    public function testIndirizzoArrayValido()
    {
        $verifica = new VerificaIndirizzo();
        $this->assertTrue($verifica->IndirizzoValido(["Via Roma", "1", "Milano", "Italia"]));
        //verifica che venga restituito true quando viene chiamato l'array ["Via Roma", "1", "Milano", "Italia"].
    }

    public function testIndirizzoArrayNonValido()
    {
        $verifica = new VerificaIndirizzo();
        $this->assertFalse($verifica->IndirizzoValido(["Via Roma", "1"]));
        // verifica che venga restituito false 
    }

    public function testIndirizzoNonValido()
    {
        $verifica = new VerificaIndirizzo();
        $this->assertFalse($verifica->IndirizzoValido(12345));
    }

    public function testIndirizzoNull()
    {
        $verifica = new VerificaIndirizzo();
        $this->assertFalse($verifica->IndirizzoValido(null));
    }
}
