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
Descritivo: Escreva um programa que leia um número inteiro de 3 casas decimais (100 a 999) e informe se o algarismo da casa das centenas é par ou ímpar.
*******************************************************************************/

// Explicação: usa intdiv() por 100 para isolar o algarismo da centena e depois verifica se ele é par ou ímpar com %.

echo "Digite um número de 3 algarismos (100 a 999): ";
$numero = (int) trim(fgets(STDIN));

$centena = intdiv($numero, 100);

if ($centena % 2 == 0) {
    echo "O algarismo da centena ($centena) é PAR." . PHP_EOL;
} else {
    echo "O algarismo da centena ($centena) é ÍMPAR." . PHP_EOL;
}
