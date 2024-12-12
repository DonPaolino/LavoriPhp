<?php
/* versione con costruttore */
class GiorniAlCompleanno {
    private $data_compleanno;

    // Costruttore per impostare la data del compleanno al momento della creazione dell'oggetto
    public function __construct($data_compleanno) {
        $this->data_compleanno = $data_compleanno;
    }

    // Metodo per calcolare i giorni al compleanno
    public function calcola() {
        // Data corrente
        $data_oggi = date("Y-m-d");

        // Converte la data del compleanno e la data corrente in formato timestamp
        $Compleanno = strtotime($this->data_compleanno);
        $Oggi = strtotime($data_oggi);

        // Calcola la differenza di giorni
        $differenzaSecondi = $Compleanno - $Oggi;
        $giorni_rimasti = intval($differenzaSecondi / (60 * 60 * 24));

        // Mostra il risultato
        if ($giorni_rimasti > 0) {
            return "Mancano " . $giorni_rimasti . " giorni al tuo compleanno!";
        } elseif ($giorni_rimasti < 0) {
            // Il compleanno è già passato 
            $prossimoCompleanno = strtotime("+1 year", $Compleanno);
            $differenzaSecondi = $prossimoCompleanno - $Oggi;
            $giorni_passati = abs($giorni_rimasti); // Trasforma in positivo
            return "Hai già compiuto gli anni " . $giorni_passati . " giorni fa!";
        } else {
            return "Buon Compleanno!";
        }
    }
}



