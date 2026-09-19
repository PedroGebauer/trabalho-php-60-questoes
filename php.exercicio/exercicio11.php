<?php
// Explicação: lê dois inteiros e exibe o resultado da multiplicação entre eles.

echo "Digite o primeiro número inteiro: ";
$n1 = (int) trim(fgets(STDIN));

echo "Digite o segundo número inteiro: ";
$n2 = (int) trim(fgets(STDIN));

echo "Produto = " . ($n1 * $n2) . PHP_EOL;
