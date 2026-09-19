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
Descritivo: Escreva um programa que leia um número inteiro e exiba na tela o seu antecessor e o seu sucessor.
*******************************************************************************/

// Explicação: lê um número inteiro e calcula antecessor (número - 1) e sucessor (número + 1).

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

echo "Antecessor = " . ($numero - 1) . PHP_EOL;
echo "Sucessor = " . ($numero + 1) . PHP_EOL;
