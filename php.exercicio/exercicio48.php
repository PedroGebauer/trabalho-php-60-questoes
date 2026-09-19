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
Descritivo: Escreva um programa que leia três números reais e exiba o maior deles.
*******************************************************************************/

// Explicação: usa a função max() passando os três valores lidos para obter o maior entre eles.

echo "Digite o primeiro número real: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o segundo número real: ";
$n2 = (float) trim(fgets(STDIN));

echo "Digite o terceiro número real: ";
$n3 = (float) trim(fgets(STDIN));

echo "Maior número = " . max($n1, $n2, $n3) . PHP_EOL;
