<?php

// 1. Incluindo a classe
require_once 'Retangulo.php';

// 2. Instanciando o objeto Retangulo com base 5 e altura 3
$retangulo = new Retangulo(5.0, 3.0);

// 3. Exibindo os dados básicos (Base e Altura)
$retangulo->mostrarDados();

// 4. Calculando e exibindo a Área
$area = $retangulo->calcularArea();
echo "Área: {$area}<br>";

// 5. Calculando e exibindo o Perímetro
$perimetro = $retangulo->calcularPerimetro();
echo "Perímetro: {$perimetro}<br>";

?>