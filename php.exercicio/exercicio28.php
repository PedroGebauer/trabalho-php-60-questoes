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
Descritivo: Escreva um programa que leia um número real e, se ele for maior do que 20, exiba a metade deste número.
*******************************************************************************/

// Explicação: usa if para verificar se o número é maior que 20 antes de calcular e exibir a metade.

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

if ($numero > 20) {
    echo "Metade = " . ($numero / 2) . PHP_EOL;
} else {
    echo "O número não é maior que 20." . PHP_EOL;
}
