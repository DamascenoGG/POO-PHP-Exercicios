<?php

class ContaBancaria {
    
    public string $titular;
    public float $saldo;
    
    public function __construct(string $titular, float $saldoInicial = 0.0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito realizado com sucesso.<br>";
        } else {
            echo "O valor de depósito deve ser maior que zero.<br>";
        }
    }

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

    public function mostrarSaldo(): void {
        echo "Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.') . "<br>";
    }
}
