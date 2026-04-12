<?php

class Retangulo {
    // Atributos tipados como float para permitir números decimais
    public float $base;
    public float $altura;

    // Construtor para inicializar a base e a altura do retângulo
    public function __construct(float $base, float $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    // Método para calcular a área (Base × Altura)
    public function calcularArea(): float {
        return $this->base * $this->altura;
    }

    // Método para calcular o perímetro (Soma de todos os lados)
    public function calcularPerimetro(): float {
        return 2 * ($this->base + $this->altura);
    }

    // Método para exibir as dimensões iniciais do retângulo
    public function mostrarDados(): void {
        echo "Base: {$this->base}<br>";
        echo "Altura: {$this->altura}<br>";
    }
}