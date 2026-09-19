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
Descritivo: Escreva um programa que leia três números e os exiba na tela em ordem crescente e, posteriormente, em ordem decrescente.
*******************************************************************************/

// Explicação: coloca os três números em um array e usa sort()/rsort() para reordená-los de forma crescente e decrescente.

echo "Digite o primeiro número: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o segundo número: ";
$n2 = (float) trim(fgets(STDIN));

echo "Digite o terceiro número: ";
$n3 = (float) trim(fgets(STDIN));

$numeros = [$n1, $n2, $n3];

$crescente = $numeros;
sort($crescente);
echo "Ordem crescente: " . implode(', ', $crescente) . PHP_EOL;

$decrescente = $numeros;
rsort($decrescente);
echo "Ordem decrescente: " . implode(', ', $decrescente) . PHP_EOL;
