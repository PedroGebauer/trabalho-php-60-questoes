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
Descritivo: Escreva um programa que leia um número inteiro e exiba se ele é divisível por 3 (múltiplo de 3).
*******************************************************************************/

// Explicação: usa o operador módulo (%) para verificar se o resto da divisão por 3 é igual a zero.

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero % 3 == 0) {
    echo "$numero é divisível por 3." . PHP_EOL;
} else {
    echo "$numero não é divisível por 3." . PHP_EOL;
}
