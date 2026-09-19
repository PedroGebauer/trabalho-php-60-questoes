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
Descritivo: Escreva um programa que obtenha o nome do usuário via teclado e exiba a mensagem de boas-vindas: 'Olá [nome digitado]!'.
*******************************************************************************/

// Explicação: lê o nome digitado pelo usuário com fgets(STDIN), remove espaços com trim() e monta a saudação.

echo "Digite seu nome: ";
$nome = trim(fgets(STDIN));

echo "Olá $nome!" . PHP_EOL;
