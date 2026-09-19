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
Descritivo: Escreva um programa que leia dois números inteiros e exiba o produto (multiplicação) entre eles.
*******************************************************************************/

// Explicação: lê dois inteiros e exibe o resultado da multiplicação entre eles.

echo "Digite o primeiro número inteiro: ";
$n1 = (int) trim(fgets(STDIN));

echo "Digite o segundo número inteiro: ";
$n2 = (int) trim(fgets(STDIN));

echo "Produto = " . ($n1 * $n2) . PHP_EOL;
