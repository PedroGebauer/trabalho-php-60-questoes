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
Descritivo: Escreva um programa que leia dois números reais e os exiba primeiro em ordem crescente e depois em ordem decrescente.
*******************************************************************************/

// Explicação: usa min() e max() para determinar o menor e o maior valor e exibi-los nas duas ordens pedidas.

echo "Digite o primeiro número real: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o segundo número real: ";
$n2 = (float) trim(fgets(STDIN));

$menor = min($n1, $n2);
$maior = max($n1, $n2);

echo "Ordem crescente: $menor, $maior" . PHP_EOL;
echo "Ordem decrescente: $maior, $menor" . PHP_EOL;
