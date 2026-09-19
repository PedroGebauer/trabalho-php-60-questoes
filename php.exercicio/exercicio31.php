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
Descritivo: Escreva um programa que leia um número inteiro e exiba se ele é PAR ou ÍMPAR.
*******************************************************************************/

// Explicação: verifica se o resto da divisão do número por 2 é zero (par) ou diferente de zero (ímpar).

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero % 2 == 0) {
    echo "$numero é PAR." . PHP_EOL;
} else {
    echo "$numero é ÍMPAR." . PHP_EOL;
}
