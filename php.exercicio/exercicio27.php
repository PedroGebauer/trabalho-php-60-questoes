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
Descritivo: Escreva um programa que leia um número inteiro e informe se ele é estritamente maior que zero.
*******************************************************************************/

// Explicação: usa o operador relacional > para comparar o número lido com zero.

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero > 0) {
    echo "O número é estritamente maior que zero." . PHP_EOL;
} else {
    echo "O número não é maior que zero." . PHP_EOL;
}
