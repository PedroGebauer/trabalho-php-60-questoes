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
Descritivo: Escreva um programa que leia dois números inteiros e exiba a média aritmética simples entre eles.
*******************************************************************************/

// Explicação: lê dois inteiros, soma-os e divide por 2 para obter a média aritmética simples.

echo "Digite o primeiro número inteiro: ";
$n1 = (int) trim(fgets(STDIN));

echo "Digite o segundo número inteiro: ";
$n2 = (int) trim(fgets(STDIN));

$media = ($n1 + $n2) / 2;

echo "Média = $media" . PHP_EOL;
