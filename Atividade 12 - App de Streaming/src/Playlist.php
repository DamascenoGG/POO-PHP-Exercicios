<?php

declare(strict_types=1);

require_once 'Reproduzivel.php';

class Playlist
{
    private array $midias = [];

    public function __construct(
        private string $nome
    ) {}

    public function adicionarMidia(Reproduzivel $midia): void
    {
        $this->midias[] = $midia;
    }

    public function executarPlaylist(): void
    {
        echo "=== Executando Playlist: {$this->nome} ===\n\n";
        
        if (empty($this->midias)) {
            echo "A playlist está vazia.\n";
            return;
        }

        foreach ($this->midias as $midia) {
            // Polimorfismo em ação: cada objeto responde de sua forma
            echo $midia->reproduzir() . "\n";
        }
        
        echo "\n=== Fim da Playlist ===\n";
    }
}