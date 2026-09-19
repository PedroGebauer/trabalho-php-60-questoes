<?php

// Explicação: usa a função max() para comparar os dois valores lidos e retornar o maior.

echo "Digite o primeiro número real: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o segundo número real: ";
$n2 = (float) trim(fgets(STDIN));

echo "Maior número = " . max($n1, $n2) . PHP_EOL;
