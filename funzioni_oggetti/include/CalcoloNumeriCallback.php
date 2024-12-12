<?php

// Classe per definire il comportamento generico
class AlQuadrato
{
    public function al_quadrato(callable $callback, ...$numeri): array
    {
        return array_map($callback, $numeri);
    }
}

// Classe per definire il callback
class Calcolatore
{
    public function calcoloQuadrato(int $numero): int
    {
        return $numero ** 2;
    }
}

