<?php

class Aluno {

    public string $nome;
    public float $nota1;
    public float $nota2;

    public function __construct(string $nome, float $nota1, float $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    public function calcularMedia(): float {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function verificarSituacao(): string {
        $media = $this->calcularMedia();
        
        if ($media >= 7.0) {
            return "Aprovado";
        } elseif ($media >= 5.0) {
            return "Recuperação";
        } else {
            return "Reprovado";
        }
    }
}
