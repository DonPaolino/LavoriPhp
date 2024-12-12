<?php

require_once 'include/InfoCopyright.php'; 

// Crea un'istanza della classe
$informazioni = new InfoCopyright();

// Ottieni l'anno corrente
$annoCorrente = date("Y");

// Nome dell'azienda
$nomeCompagnia = "MYCOMPANY s.r.l.";

// Genera il messaggio di copyright
$messaggioCopyright = $informazioni->generaCopyright($annoCorrente, $nomeCompagnia);

// Stampa il risultato
echo $messaggioCopyright . "\n";




