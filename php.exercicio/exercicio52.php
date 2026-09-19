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
Descritivo: Escreva um programa que leia um valor em Reais (BRL), a taxa de cotação atual do dólar (USD) e converta o valor para dólares, exibindo o resultado formatado.
*******************************************************************************/

// Explicação: divide o valor em reais pela cotação do dólar para obter o valor equivalente em dólares.

echo "Digite o valor em Reais (BRL): ";
$valorReais = (float) trim(fgets(STDIN));

echo "Digite a cotação atual do dólar (BRL por USD): ";
$cotacaoDolar = (float) trim(fgets(STDIN));

$valorDolares = $valorReais / $cotacaoDolar;

echo "Valor em dólares = US$ " . number_format($valorDolares, 2, ',', '.') . PHP_EOL;
