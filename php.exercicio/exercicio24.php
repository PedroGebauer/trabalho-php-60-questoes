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
Descritivo: Escreva um programa que calcule e exiba o comprimento de uma circunferência com base em seu raio fornecido pelo usuário. Defina PI como uma constante com valor 3.1415 (Fórmula: C = 2 * PI * Raio).
*******************************************************************************/

// Explicação: define PI como constante com define() e aplica a fórmula C = 2 * PI * raio.

define('PI', 3.1415);

echo "Digite o raio da circunferência: ";
$raio = (float) trim(fgets(STDIN));

$comprimento = 2 * PI * $raio;

echo "Comprimento = $comprimento" . PHP_EOL;
