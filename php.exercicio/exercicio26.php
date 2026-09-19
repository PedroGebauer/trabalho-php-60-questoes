<?php

// Explicação: usa uma variável auxiliar para armazenar temporariamente o valor de A durante a troca.

echo "Digite o valor de A: ";
$a = (int) trim(fgets(STDIN));

echo "Digite o valor de B: ";
$b = (int) trim(fgets(STDIN));

echo "Antes da troca: A = $a | B = $b" . PHP_EOL;

$aux = $a;
$a = $b;
$b = $aux;

echo "Depois da troca: A = $a | B = $b" . PHP_EOL;
