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
Descritivo: Escreva um programa que leia um nome, um endereço e um telefone via teclado e imprima-os na tela organizados em linhas separadas.
*******************************************************************************/

// Explicação: lê três strings do teclado (nome, endereço e telefone) e imprime cada uma em sua própria linha.

echo "Digite o nome: ";
$nome = trim(fgets(STDIN));

echo "Digite o endereço: ";
$endereco = trim(fgets(STDIN));

echo "Digite o telefone: ";
$telefone = trim(fgets(STDIN));

echo "Nome: $nome" . PHP_EOL;
echo "Endereço: $endereco" . PHP_EOL;
echo "Telefone: $telefone" . PHP_EOL;
