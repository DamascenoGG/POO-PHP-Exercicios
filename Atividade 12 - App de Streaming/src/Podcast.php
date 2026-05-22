<?php

declare(strict_types=1);

require_once 'Midia.php';

class Podcast extends Midia
{
    public function __construct(
        string $titulo,
        int $duracaoSegundos,
        private string $host,
        private int $episodio
    ) {
        parent::__construct($titulo, $duracaoSegundos);
    }

    public function reproduzir(): string
    {
        return "🎙️ Iniciando Podcast: '{$this->getTitulo()}' | Ep. #{$this->episodio} apresentado por {$this->host}.";
    }
}