<?php

class CalcoloNumeri
{
    // Funzione che calcola il quadrato di un numero
    public function calcolaQuadrato($numero)
    {
        return $numero ** 2;
    }

    // Applicare calcolaQuadrato
    public function al_quadrato(array $numeri)
    {
        return array_map([$this, 'calcolaQuadrato'], $numeri); // Specifica il metodo calcolaQuadrato di questa classe come callback da applicare a ogni elemento dell'array.
    }
}
