<?php

declare(strict_types=1);

abstract class Midia implements Reproduzivel
{
    public function __construct(
        private string $titulo,
        private int $duracaoSegundos
    ) {}

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getDuracaoSegundos(): int
    {
        return $this->duracaoSegundos;
    }
}