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
Descritivo: Escreva um programa que leia o valor da base e da altura de um triângulo e calcule e exiba a sua área (Fórmula: Area = (Base * Altura) / 2).
*******************************************************************************/

// Explicação: aplica diretamente a fórmula da área do triângulo com os valores lidos.

echo "Digite a base do triângulo: ";
$base = (float) trim(fgets(STDIN));

echo "Digite a altura do triângulo: ";
$altura = (float) trim(fgets(STDIN));

$area = ($base * $altura) / 2;

echo "Área = $area" . PHP_EOL;
