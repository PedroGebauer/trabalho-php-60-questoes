<?php
// Explicação: armazena os cinco números lidos em um array e usa max() e min() para obter o maior e o menor valor.

echo "Digite o 1º número: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o 2º número: ";
$n2 = (float) trim(fgets(STDIN));

echo "Digite o 3º número: ";
$n3 = (float) trim(fgets(STDIN));

echo "Digite o 4º número: ";
$n4 = (float) trim(fgets(STDIN));

echo "Digite o 5º número: ";
$n5 = (float) trim(fgets(STDIN));

$numeros = [$n1, $n2, $n3, $n4, $n5];

echo "Maior valor = " . max($numeros) . PHP_EOL;
echo "Menor valor = " . min($numeros) . PHP_EOL;
