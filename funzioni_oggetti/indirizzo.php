<?php 

require_once 'include/AnalizzaIndirizzo.php';

$addresses = array(
    'via tal dei tali 1, 20220 Milano (MI)',
    ['via tal dei tali 2', 'Genova', 'GE', '10000', 'Italia'],
    2,
    null,
    new stdClass(),
    ['Mario', 'Rossi']
);

$verifica = new VerificaIndirizzo();

foreach ($addresses as $indirizzo) {
    if ($verifica->IndirizzoValido($indirizzo)) {
        if (is_string($indirizzo)) {
            echo "Indirizzo: $indirizzo\n";
        } elseif (is_array($indirizzo)) {
            echo "Indirizzo: " . implode(', ', $indirizzo) . "\n"; 
        }
    }
}