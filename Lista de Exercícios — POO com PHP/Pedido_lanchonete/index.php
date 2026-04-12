<?php

require_once 'Pedido.php';

$pedido = new Pedido("Rafael", "X-Burguer", 2, 18.00);

$pedido->mostrarResumo();

$total = $pedido->calcularTotal();
echo "Total: R$ " . number_format($total, 2, ',', '.') . "<br>";

?>
