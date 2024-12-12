<?php

require_once 'include/CalcolaCompleanno_old.php';
require_once 'include/CalcolaCompleanno.php';

//senza costruttore
$giorniAlCompleanno_1 = new GiorniAlCompleanno_Old();
echo $giorniAlCompleanno_1->calcola("2024-12-30");

echo "\n";

// Con l'utililizzo del costruttore
$giorniAlCompleanno = new GiorniAlCompleanno("2024-12-30");
echo $giorniAlCompleanno->calcola();

