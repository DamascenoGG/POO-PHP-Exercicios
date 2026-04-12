<?php

// 1. Incluindo a classe
require_once 'ContaBancaria.php';

// 2. Instanciando uma conta bancária para a titular "Maria" com saldo inicial de 0
$conta = new ContaBancaria("Maria", 0.0);

// Exibindo o nome do titular
echo "Titular: {$conta->titular}<br>";

// 3. Executando um depósito para criar saldo (ex: depositando R$ 1000)
$conta->depositar(1000.0);

// 4. Executando um saque válido (ex: sacando R$ 100, para sobrar os R$ 900 do exemplo)
$conta->sacar(100.0);

// 5. Exibindo o saldo final
$conta->mostrarSaldo();

echo "<hr>"; // Separador apenas para organizar visualmente

// 6. Testando a regra de saque maior que o saldo
echo "<b>Teste de saldo insuficiente:</b><br>";
$conta->sacar(1500.0); // Tentativa de sacar mais do que os R$ 900 disponíveis

?>