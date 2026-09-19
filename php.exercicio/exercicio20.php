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
Descritivo: Escreva um programa que leia uma data no formato ddmmaa (ex: 250826) e exiba a mesma data reorganizada no formato mmddaa.
*******************************************************************************/

// Explicação: extrai dia, mês e ano com substr() e concatena novamente na ordem mm-dd-aa.

echo "Digite a data no formato ddmmaa: ";
$data = trim(fgets(STDIN));

$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

echo "Data no formato mmddaa = " . $mes . $dia . $ano . PHP_EOL;
