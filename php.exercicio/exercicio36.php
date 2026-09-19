<?php

// Explicação: calcula o total pelo consumo (preço * quantidade) e usa max() para garantir a taxa mínima de R$ 11,20.

echo "Digite o código do consumidor: ";
$codigo = trim(fgets(STDIN));

echo "Digite o preço do kWh: ";
$precoKwh = (float) trim(fgets(STDIN));

echo "Digite a quantidade de kWh consumida: ";
$quantidadeKwh = (float) trim(fgets(STDIN));

$totalConsumo = $precoKwh * $quantidadeKwh;
$totalPagar = max($totalConsumo, 11.20);

echo "Código do consumidor: $codigo" . PHP_EOL;
echo "Total a pagar: R$ " . number_format($totalPagar, 2, ',', '.') . PHP_EOL;
