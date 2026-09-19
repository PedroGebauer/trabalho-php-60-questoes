<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: José Carlos Domingues Flores
Turma: [PREENCHER TURMA]
Componentes:
 [RA] - [Nome completo 1]
 [RA] - [Nome completo 2]
 [RA] - [Nome completo 3]
 [RA] - [Nome completo 4]
 [RA] - [Nome completo 5]
Data: [PREENCHER DATA DE ENTREGA]
Descritivo: Deseja-se calcular a conta de consumo de energia elétrica de um consumidor. Escreva um programa que leia o código do consumidor, o preço do kWh e a quantidade de kWh consumida. Exiba o código do consumidor e o total a pagar, sabendo que a taxa mínima cobrada é de R$ 11,20.
*******************************************************************************/

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
