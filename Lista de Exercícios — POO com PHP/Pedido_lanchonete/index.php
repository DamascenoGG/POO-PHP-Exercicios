<?php

// 1. Incluindo a classe
require_once 'Pedido.php';

// 2. Instanciando o objeto Pedido com os dados do exemplo
$pedido = new Pedido("Rafael", "X-Burguer", 2, 18.00);

// 3. Exibindo os dados do cliente, o item, quantidade e preço (através do método criado)
$pedido->mostrarResumo();

// 4. Calculando o total e exibindo o resultado formatado
$total = $pedido->calcularTotal();
echo "Total: R$ " . number_format($total, 2, ',', '.') . "<br>";

?>