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
Descritivo: Escreva um programa que leia o nome e o sobrenome de uma pessoa e exiba-os na seguinte forma formatada: 'sobrenome, nome' (exemplo: 'Flores, José').
*******************************************************************************/

// Explicação: lê nome e sobrenome separadamente e concatena na ordem invertida "sobrenome, nome".

echo "Digite o nome: ";
$nome = trim(fgets(STDIN));

echo "Digite o sobrenome: ";
$sobrenome = trim(fgets(STDIN));

echo "$sobrenome, $nome" . PHP_EOL;
