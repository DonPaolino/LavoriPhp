<?php declare(strict_types=1);

namespace Paolo\paridispari;

class Numero
{
    public function PariDispari($valore)
    {
        // Controlla che il valore sia un numero intero
        if (!is_int($valore)) {
            return false; // Non è valido, quindi non è "pari"
        }

        // Pari se il resto della divisione per 2 è 0
        return $valore % 2 === 0;
    }
}
