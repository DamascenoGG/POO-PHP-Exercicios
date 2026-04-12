<?php

class ContaBancaria {
    // Declaração dos atributos com tipagem
    public string $titular;
    public float $saldo;

    // Construtor para inicializar a conta com um titular e um saldo inicial (padrão zero)
    public function __construct(string $titular, float $saldoInicial = 0.0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    // Método para realizar depósito e adicionar o valor ao saldo
    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito realizado com sucesso.<br>";
        } else {
            echo "O valor de depósito deve ser maior que zero.<br>";
        }
    }

    // Método para realizar saque com validação de saldo
    public function sacar(float $valor): void {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente.<br>";
        } elseif ($valor > 0) {
            $this->saldo -= $valor;
            echo "Saque realizado com sucesso.<br>";
        } else {
            echo "O valor do saque deve ser maior que zero.<br>";
        }
    }

    // Método para exibir o saldo formatado
    public function mostrarSaldo(): void {
        echo "Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.') . "<br>";
    }
}