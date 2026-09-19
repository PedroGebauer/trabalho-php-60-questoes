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
Descritivo: Escreva um programa que leia uma temperatura dada na escala Fahrenheit e exiba o equivalente convertido em graus Celsius (Fórmula de conversão: C = 5/9 * (F – 32)).
*******************************************************************************/

// Explicação: aplica a fórmula de conversão de Fahrenheit para Celsius sobre o valor lido.

echo "Digite a temperatura em Fahrenheit: ";
$fahrenheit = (float) trim(fgets(STDIN));

$celsius = (5 / 9) * ($fahrenheit - 32);

echo "Temperatura em Celsius = $celsius" . PHP_EOL;
