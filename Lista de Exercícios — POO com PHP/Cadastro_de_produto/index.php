<?php

require_once 'Produto.php';

$produto = new Produto("Teclado", 120.00, 3);

$produto->mostrarDados();

$valorEstoque = $produto->calcularValorEstoque();
echo "Valor em estoque: R$ " . number_format($valorEstoque, 2, ',', '.') . "<br>";

?>
