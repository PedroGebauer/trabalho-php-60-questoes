<?php

// Explicação: identifica a faixa salarial com if/elseif/else, aplica o percentual de reajuste correspondente
// e soma o reajuste ao salário atual para obter o novo salário.

echo "Digite o nome do funcionário: ";
$nome = trim(fgets(STDIN));

echo "Digite o salário atual: ";
$salario = (float) trim(fgets(STDIN));

if ($salario <= 1000.00) {
    $percentual = 0.20;
} elseif ($salario <= 5000.00) {
    $percentual = 0.10;
} else {
    $percentual = 0.00;
}

$novoSalario = $salario + ($salario * $percentual);

echo "Funcionário: $nome" . PHP_EOL;
echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.') . PHP_EOL;
