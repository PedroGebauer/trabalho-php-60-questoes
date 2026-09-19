<?php

// Explicação: usa a função max() passando os três valores lidos para obter o maior entre eles.

echo "Digite o primeiro número real: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o segundo número real: ";
$n2 = (float) trim(fgets(STDIN));

echo "Digite o terceiro número real: ";
$n3 = (float) trim(fgets(STDIN));

echo "Maior número = " . max($n1, $n2, $n3) . PHP_EOL;
