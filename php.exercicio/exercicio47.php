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
Descritivo: Escreva um programa que leia dois nomes e os exiba na tela em ordem alfabética.
*******************************************************************************/

// Explicação: compara os dois nomes com strcmp() e usa if/else para exibi-los na ordem alfabética correta.

echo "Digite o primeiro nome: ";
$nome1 = trim(fgets(STDIN));

echo "Digite o segundo nome: ";
$nome2 = trim(fgets(STDIN));

if (strcmp($nome1, $nome2) <= 0) {
    echo "$nome1" . PHP_EOL;
    echo "$nome2" . PHP_EOL;
} else {
    echo "$nome2" . PHP_EOL;
    echo "$nome1" . PHP_EOL;
}
