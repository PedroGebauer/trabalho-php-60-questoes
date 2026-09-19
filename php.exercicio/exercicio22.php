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
Descritivo: Escreva um programa que leia o valor do saldo de uma aplicação bancária e exiba o novo saldo reajustado com um acréscimo de 2%.
*******************************************************************************/

// Explicação: aplica o acréscimo de 2% multiplicando o saldo por 1.02.

echo "Digite o saldo atual: ";
$saldo = (float) trim(fgets(STDIN));

$novoSaldo = $saldo * 1.02;

echo "Novo saldo = $novoSaldo" . PHP_EOL;
