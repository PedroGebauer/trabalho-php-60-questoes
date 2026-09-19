<?php
// Explicação: define PI como constante com define() e aplica a fórmula C = 2 * PI * raio.

define('PI', 3.1415);

echo "Digite o raio da circunferência: ";
$raio = (float) trim(fgets(STDIN));

$comprimento = 2 * PI * $raio;

echo "Comprimento = $comprimento" . PHP_EOL;
