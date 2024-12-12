<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Paolo\quadrato\CalcoloNumeri;

class CalcoloNumeriTest extends TestCase
{
    public function testCalcolaQuadrato()
    {
        $calcolatore = new CalcoloNumeri();

        // Test singolo numero
        $this->assertEquals(4, $calcolatore->calcolaQuadrato(2));
        $this->assertEquals(9, $calcolatore->calcolaQuadrato(3));
        $this->assertEquals(0, $calcolatore->calcolaQuadrato(0));
        $this->assertEquals(25, $calcolatore->calcolaQuadrato(5));
    }

    public function testAlQuadrato()
    {
        $calcolatore = new CalcoloNumeri();

        // Array di test
        $origine = [1, 2, 3, 4, 5];
        $quadratoAtteso = [1, 4, 9, 16, 25];

        // Calcola i quadrati
        $quadrato = $calcolatore->al_quadrato($origine);

        // Verifica il risultato
        $this->assertEquals($quadratoAtteso, $quadrato);

        // Verifica origine e risultato 
        foreach ($origine as $key => $valore) {
            $this->assertEquals($quadratoAtteso[$key], $quadrato[$key]);
        }
    }
}
