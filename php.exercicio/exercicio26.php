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
Descritivo: Escreva um programa que leia duas variáveis inteiras (A e B) e efetue a troca de conteúdo entre elas de forma que A passe a valer B, e B passe a valer A. Exiba os valores antes e depois da troca.
*******************************************************************************/

// Explicação: usa uma variável auxiliar para armazenar temporariamente o valor de A durante a troca.

echo "Digite o valor de A: ";
$a = (int) trim(fgets(STDIN));

echo "Digite o valor de B: ";
$b = (int) trim(fgets(STDIN));

echo "Antes da troca: A = $a | B = $b" . PHP_EOL;

$aux = $a;
$a = $b;
$b = $aux;

echo "Depois da troca: A = $a | B = $b" . PHP_EOL;
