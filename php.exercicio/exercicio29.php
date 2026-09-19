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
Descritivo: Escreva um programa que leia um número real e, se for positivo, exiba seu inverso (1/x); caso contrário, exiba o seu valor absoluto (número multiplicado por -1).
*******************************************************************************/

// Explicação: usa if/else para decidir entre calcular o inverso (positivo) ou o valor absoluto (não positivo).

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

if ($numero > 0) {
    echo "Inverso = " . (1 / $numero) . PHP_EOL;
} else {
    echo "Valor absoluto = " . ($numero * -1) . PHP_EOL;
}
