<?php

// Explicação: coloca os três números em um array e usa sort()/rsort() para reordená-los de forma crescente e decrescente.

echo "Digite o primeiro número: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o segundo número: ";
$n2 = (float) trim(fgets(STDIN));

echo "Digite o terceiro número: ";
$n3 = (float) trim(fgets(STDIN));

$numeros = [$n1, $n2, $n3];

$crescente = $numeros;
sort($crescente);
echo "Ordem crescente: " . implode(', ', $crescente) . PHP_EOL;

$decrescente = $numeros;
rsort($decrescente);
echo "Ordem decrescente: " . implode(', ', $decrescente) . PHP_EOL;
