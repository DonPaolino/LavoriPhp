<?php declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use Paolo\testcopyright\InfoCopyright;

class InfoCopyrightTest extends TestCase
{
    public function testGeneraCopyright()
    {
        // Crea un'istanza della classe InfoCopyright
        $infoCopyright = new InfoCopyright();

        // Ottieni l'anno corrente
        $annoCorrente = date("Y");

        // Nome dell'azienda
        $nomeCompagnia = "MYCOMPANY s.r.l.";

        // Genera il messaggio di copyright
        $messaggioAtteso = "Copyright $annoCorrente © $nomeCompagnia.";        
        $messaggioGenerato = $infoCopyright->generaCopyright($annoCorrente, $nomeCompagnia);
        //$messaggioGenerato = "Ciao";

        // Verifica che il messaggio generato sia corretto
        $this->assertEquals($messaggioAtteso, $messaggioGenerato, "Il messaggio di copyright generato non è corretto.");
    }
}



