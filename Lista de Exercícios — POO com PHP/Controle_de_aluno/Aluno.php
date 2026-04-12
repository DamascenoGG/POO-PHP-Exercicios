<?php

class Aluno {
    // Declaração dos atributos com tipagem
    public string $nome;
    public float $nota1;
    public float $nota2;

    // Construtor para inicializar o objeto
    public function __construct(string $nome, float $nota1, float $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    // Método para calcular e retornar a média das notas
    public function calcularMedia(): float {
        return ($this->nota1 + $this->nota2) / 2;
    }

    // Método para verificar a situação do aluno com base na média
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