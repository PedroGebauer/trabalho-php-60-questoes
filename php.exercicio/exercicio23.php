<?php

// Explicação: aplica diretamente a fórmula da área do triângulo com os valores lidos.

echo "Digite a base do triângulo: ";
$base = (float) trim(fgets(STDIN));

echo "Digite a altura do triângulo: ";
$altura = (float) trim(fgets(STDIN));

$area = ($base * $altura) / 2;

echo "Área = $area" . PHP_EOL;
