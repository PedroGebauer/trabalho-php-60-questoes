<?php

// Explicação: usa match() para definir o valor da diária conforme o tipo de apartamento, calcula o subtotal
// (diárias + consumo), a taxa de serviço de 10% sobre o subtotal e soma tudo para obter o total geral.

echo "Digite o nome do hóspede: ";
$nome = trim(fgets(STDIN));

echo "Digite o tipo do apartamento (A, B, C ou D): ";
$tipo = strtoupper(trim(fgets(STDIN)));

echo "Digite a quantidade de diárias: ";
$diarias = (int) trim(fgets(STDIN));

echo "Digite o valor do consumo interno: ";
$consumo = (float) trim(fgets(STDIN));

$valorDiaria = match ($tipo) {
    'A' => 150.00,
    'B' => 100.00,
    'C' => 75.00,
    'D' => 50.00,
    default => 0.00,
};

$totalDiarias = $diarias * $valorDiaria;
$subtotal = $totalDiarias + $consumo;
$taxaServico = $subtotal * 0.10;
$totalGeral = $subtotal + $taxaServico;

echo "----- Fatura do Hóspede -----" . PHP_EOL;
echo "Nome: $nome" . PHP_EOL;
echo "Tipo do apartamento: $tipo" . PHP_EOL;
echo "Valor total das diárias: R$ " . number_format($totalDiarias, 2, ',', '.') . PHP_EOL;
echo "Consumo interno: R$ " . number_format($consumo, 2, ',', '.') . PHP_EOL;
echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . PHP_EOL;
echo "Taxa de serviço (10%): R$ " . number_format($taxaServico, 2, ',', '.') . PHP_EOL;
echo "Total geral: R$ " . number_format($totalGeral, 2, ',', '.') . PHP_EOL;
