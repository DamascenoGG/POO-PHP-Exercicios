<?php

// 1. Incluindo a classe
require_once 'Funcionario.php';

// 2. Instanciando o funcionário "Ana" com salário inicial de 2500
$funcionario = new Funcionario("Ana", 2500.00);

// 3. Mostrando o nome e o salário ANTES do aumento (conforme o exemplo)
echo "Nome: {$funcionario->nome}<br>";
echo "Salário inicial: R$ " . number_format($funcionario->salario, 2, ',', '.') . "<br>";

// 4. Aplicando um aumento de 10% (2500 + 10% = 2750)
$funcionario->aplicarAumento(10);

// 5. Mostrando o salário DEPOIS do aumento
echo "Salário com aumento: R$ " . number_format($funcionario->salario, 2, ',', '.') . "<br>";

?>