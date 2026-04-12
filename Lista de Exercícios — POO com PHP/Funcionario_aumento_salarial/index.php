<?php

require_once 'Funcionario.php';

$funcionario = new Funcionario("Ana", 2500.00);

echo "Nome: {$funcionario->nome}<br>";
echo "Salário inicial: R$ " . number_format($funcionario->salario, 2, ',', '.') . "<br>";

$funcionario->aplicarAumento(10);

echo "Salário com aumento: R$ " . number_format($funcionario->salario, 2, ',', '.') . "<br>";

?>
