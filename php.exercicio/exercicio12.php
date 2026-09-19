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
Descritivo: Escreva um programa que leia um número real e exiba a terça parte deste número.
*******************************************************************************/

// Explicação: lê um número real com (float) e divide por 3 para obter a terça parte.

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

echo "Terça parte = " . ($numero / 3) . PHP_EOL;
