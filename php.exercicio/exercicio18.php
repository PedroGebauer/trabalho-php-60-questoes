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
Descritivo: Escreva um programa que leia um número inteiro de três algarismos (de 100 a 999) e exiba o algarismo correspondente à casa das dezenas.
*******************************************************************************/

// Explicação: divide o número por 10 com intdiv() para remover a unidade e usa % 10 para isolar a dezena.

echo "Digite um número de 3 algarismos (100 a 999): ";
$numero = (int) trim(fgets(STDIN));

$dezena = intdiv($numero, 10) % 10;

echo "Algarismo da dezena = $dezena" . PHP_EOL;
