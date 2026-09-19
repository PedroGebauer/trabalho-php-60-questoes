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
Descritivo: Escreva um programa que leia o nome de um aluno e suas duas notas em avaliações (AVs), calcule a média aritmética simples e exiba o nome do aluno seguido de sua média final.
*******************************************************************************/

// Explicação: lê o nome e as duas notas (AV1 e AV2), soma as notas e divide por 2 para obter a média final.

echo "Digite o nome do aluno: ";
$nome = trim(fgets(STDIN));

echo "Digite a nota da AV1: ";
$av1 = (float) trim(fgets(STDIN));

echo "Digite a nota da AV2: ";
$av2 = (float) trim(fgets(STDIN));

$media = ($av1 + $av2) / 2;

echo "$nome - Média final = $media" . PHP_EOL;
