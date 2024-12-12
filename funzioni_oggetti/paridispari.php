<?php

require_once 'include/Numero.php';

$numero = new Numero();

$valore = 5;

echo $numero->PariDispari($valore) ? "$valore è pari.\n" : "$valore è dispari o non è valido.\n"; 


