<?php
// Explicação: aplica a fórmula de conversão de Fahrenheit para Celsius sobre o valor lido.

echo "Digite a temperatura em Fahrenheit: ";
$fahrenheit = (float) trim(fgets(STDIN));

$celsius = (5 / 9) * ($fahrenheit - 32);

echo "Temperatura em Celsius = $celsius" . PHP_EOL;
