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
Descritivo: Escreva um programa que leia um número inteiro via teclado utilizando a CLI e exiba a mensagem: 'Número lido = [valor digitado]'.
*******************************************************************************/

// Explicação: lê uma linha do teclado com fgets(STDIN), converte para inteiro com (int) e exibe o valor lido.

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

echo "Número lido = $numero" . PHP_EOL;
