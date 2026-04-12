<?php

require_once 'Retangulo.php';

$retangulo = new Retangulo(5.0, 3.0);

$retangulo->mostrarDados();

$area = $retangulo->calcularArea();
echo "Área: {$area}<br>";

$perimetro = $retangulo->calcularPerimetro();
echo "Perímetro: {$perimetro}<br>";

?>
