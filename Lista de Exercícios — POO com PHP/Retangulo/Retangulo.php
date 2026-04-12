<?php

class Retangulo {

    public float $base;
    public float $altura;

    public function __construct(float $base, float $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(): float {
        return $this->base * $this->altura;
    }

    public function calcularPerimetro(): float {
        return 2 * ($this->base + $this->altura);
    }

    public function mostrarDados(): void {
        echo "Base: {$this->base}<br>";
        echo "Altura: {$this->altura}<br>";
    }
}
