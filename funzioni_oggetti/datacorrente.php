<?php

require_once 'include/FormattatoreData.php';


$data = new DateTimeImmutable('2024-12-07');

// Array di formati 
$formati = [
    "Y-m-d", 
    "Y/m/d", 
    "y.m.d", 
    "d-m-y", 
    "ddmmyyyy"
];

foreach ($formati as $formato) {
    $result = FormattatoreData::ottieniDataCorrente($data, $formato);
    echo "Formato: $formato - Risultato: $result\n";
}