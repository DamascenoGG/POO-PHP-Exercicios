<?php

// 1. Incluindo a classe
require_once 'Aluno.php';

// 2. Instanciando o objeto Aluno (notas 9 e 7 para resultar na média 8 do exemplo)
$aluno = new Aluno("Carlos", 9.0, 7.0);

// 3. Calculando a média e obtendo a situação
$media = $aluno->calcularMedia();
$situacao = $aluno->verificarSituacao();

// 4. Exibindo os resultados conforme o exemplo esperado
echo "Aluno: {$aluno->nome}<br>";
echo "Média: {$media}<br>";
echo "Situação: {$situacao}<br>";

?>