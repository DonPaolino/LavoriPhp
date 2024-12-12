<?php

// Definizione della classe
class FormattatoreData
{
    public static function ottieniDataCorrente(DateTimeImmutable $date, string $format): string
    {
        $allowedFormats = [
            "Y-m-d", "Y/m/d", "y.m.d", "d-m-y", "ddmmyyyy"
        ];

        if (!in_array($format, $allowedFormats)) {
            throw new InvalidArgumentException("Formato $format non valido");
        }

        return $date->format($format);
    }
}

// Esecuzione della classe
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
