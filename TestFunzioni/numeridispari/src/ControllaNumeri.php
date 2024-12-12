<?php declare(strict_types=1);

namespace Paolo\paridispari;

class ControllaNumeri
{
    // Metodo per verificare se un numero è pari
    public function paridispari(int $numero): bool
    {
        return $numero % 2 === 0;
    }

    // Metodo per trovare i primi N numeri dispari
    public function primiNumeriDispari(int $n): array
    {
        $numeriDispari = [];
        $numero = 1; // Partiamo dal numero 1

        while (count($numeriDispari) < $n) {
            if (!$this->paridispari($numero)) { // Controlla se il numero è dispari
                $numeriDispari[] = $numero;
            }
            $numero++; // Passa al numero successivo
        }

        return $numeriDispari;
    }
}



