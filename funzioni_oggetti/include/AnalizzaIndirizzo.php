<?php

class VerificaIndirizzo
{
    // Verifica se l'indirizzo è valido.
    public function IndirizzoValido($indirizzo)
    {
        if (is_string($indirizzo)) {
            return true;
        }
        if (is_array($indirizzo) && count($indirizzo) >= 4) {
            return true;
        }
        return false;
    }
}


