<?php

// 1. Incluindo a classe
require_once 'Produto.php';

// 2. Instanciando o objeto Produto com os valores do exemplo esperado
$produto = new Produto("Teclado", 120.00, 3);

// 3. Chamando o método para exibir os dados do produto
$produto->mostrarDados();

// 4. Chamando o método para calcular o estoque e exibindo o resultado formatado
$valorEstoque = $produto->calcularValorEstoque();
echo "Valor em estoque: R$ " . number_format($valorEstoque, 2, ',', '.') . "<br>";

?>