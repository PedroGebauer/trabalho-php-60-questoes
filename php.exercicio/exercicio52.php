<?php

// Explicação: divide o valor em reais pela cotação do dólar para obter o valor equivalente em dólares.

echo "Digite o valor em Reais (BRL): ";
$valorReais = (float) trim(fgets(STDIN));

echo "Digite a cotação atual do dólar (BRL por USD): ";
$cotacaoDolar = (float) trim(fgets(STDIN));

$valorDolares = $valorReais / $cotacaoDolar;

echo "Valor em dólares = US$ " . number_format($valorDolares, 2, ',', '.') . PHP_EOL;
