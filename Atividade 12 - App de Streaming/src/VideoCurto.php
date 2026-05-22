<?php

declare(strict_types=1);

require_once 'Midia.php';

class VideoCurto extends Midia
{
    public function __construct(
        string $titulo,
        int $duracaoSegundos,
        private string $criador
    ) {
        parent::__construct($titulo, $duracaoSegundos);
    }

    public function reproduzir(): string
    {
        return "📱 Vendo vídeo no TikTok: '{$this->getTitulo()}' por @{$this->criador}.";
    }
}