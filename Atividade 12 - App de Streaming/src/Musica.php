<?php

declare(strict_types=1);

require_once 'Midia.php';

class Musica extends Midia
{
    public function __construct(
        string $titulo,
        int $duracaoSegundos,
        private string $artista
    ) {
        parent::__construct($titulo, $duracaoSegundos);
    }

    public function reproduzir(): string
    {
        return "🎵 Tocando Música: '{$this->getTitulo()}' de {$this->artista} ({$this->getDuracaoSegundos()}s).";
    }
}