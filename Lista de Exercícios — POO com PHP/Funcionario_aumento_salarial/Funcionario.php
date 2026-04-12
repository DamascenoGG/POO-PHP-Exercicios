<?php

class Funcionario {
    // Declaração dos atributos com tipagem
    public string $nome;
    public float $salario;

    // Construtor para inicializar o objeto com nome e salário
    public function __construct(string $nome, float $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    // Método para aplicar o aumento percentual sobre o salário atual
    public function aplicarAumento(float $percentual): void {
        $aumento = $this->salario * ($percentual / 100);
        $this->salario += $aumento;
    }

    // Método genérico para exibir os dados atuais do funcionário
    public function mostrarDados(): void {
        echo "Nome: {$this->nome}<br>";
        echo "Salário atual: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }
}