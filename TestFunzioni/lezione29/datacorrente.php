<?php

namespace Paolo\lezione29;
require_once 'src/FormattatoreData.php';

use DateTimeImmutable;
use InvalidArgumentException;



try {
    // Creazione di un oggetto DateTimeImmutable
    //$date = new DateTimeImmutable('2024-12-07');
    $date = new DateTimeImmutable();
    echo $date->format('Y-m-d');

    // Test con un formato valido
    $format = 'Y-m-d';
    $result = FormattatoreData::ottieniDataCorrente($date, $format);
    echo "Data formattata ($format): $result\n";

    // Test con un altro formato valido
    $format = 'd-m-y';
    $result = FormattatoreData::ottieniDataCorrente($date, $format);
    echo "Data formattata ($format): $result\n";

    // Test con un formato non valido
    $format = 'dd/mm/yyyy';
    $result = FormattatoreData::ottieniDataCorrente($date, $format);
    echo "Data formattata ($format): $result\n";

} catch (InvalidArgumentException $e) {
    echo "Errore: " . $e->getMessage() . "\n";
}