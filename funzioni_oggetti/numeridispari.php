<?php

require_once 'include/ControllaNumeri.php';

// Creazione dell'oggetto
$controllaNumeri = new ControllaNumeri();

// Trova e mostra i primi 10 numeri dispari
$primiDispari = $controllaNumeri->primiNumeriDispari(10);

echo "Primi 10 numeri dispari:\n";
foreach ($primiDispari as $numero) {
    echo $numero . "\n";
}


?>