<?php

class Funcionario {

    public string $nome;
    public float $salario;

    public function __construct(string $nome, float $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aplicarAumento(float $percentual): void {
        $aumento = $this->salario * ($percentual / 100);
        $this->salario += $aumento;
    }

    public function mostrarDados(): void {
        echo "Nome: {$this->nome}<br>";
        echo "Salário atual: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }
}
