<?php

// Explicação: usa min() e max() para determinar o menor e o maior valor e exibi-los nas duas ordens pedidas.

echo "Digite o primeiro número real: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o segundo número real: ";
$n2 = (float) trim(fgets(STDIN));

$menor = min($n1, $n2);
$maior = max($n1, $n2);

echo "Ordem crescente: $menor, $maior" . PHP_EOL;
echo "Ordem decrescente: $maior, $menor" . PHP_EOL;
