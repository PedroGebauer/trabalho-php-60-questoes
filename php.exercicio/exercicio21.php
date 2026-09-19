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
Descritivo: Escreva um programa que leia quatro números inteiros e calcule a média ponderada deles, considerando que os pesos associados a cada número são, respectivamente, 1, 2, 3 e 4.
*******************************************************************************/

// Explicação: multiplica cada número pelo seu peso, soma os produtos e divide pela soma dos pesos (1+2+3+4=10).

echo "Digite o 1º número: ";
$n1 = (int) trim(fgets(STDIN));

echo "Digite o 2º número: ";
$n2 = (int) trim(fgets(STDIN));

echo "Digite o 3º número: ";
$n3 = (int) trim(fgets(STDIN));

echo "Digite o 4º número: ";
$n4 = (int) trim(fgets(STDIN));

$mediaPonderada = ($n1 * 1 + $n2 * 2 + $n3 * 3 + $n4 * 4) / (1 + 2 + 3 + 4);

echo "Média ponderada = $mediaPonderada" . PHP_EOL;
