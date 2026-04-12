<?php

require_once 'ContaBancaria.php';

$conta = new ContaBancaria("Maria", 0.0);

echo "Titular: {$conta->titular}<br>";

$conta->depositar(1000.0);

$conta->sacar(100.0);

$conta->mostrarSaldo();

echo "<hr>";

echo "<b>Teste de saldo insuficiente:</b><br>";
$conta->sacar(1500.0);

?>
