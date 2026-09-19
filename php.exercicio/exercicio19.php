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
Descritivo: Escreva um programa que leia uma string correspondente a uma data no formato ddmmaa (6 dígitos, ex: 250826) e exiba o dia, mês e ano de forma separada.
*******************************************************************************/

// Explicação: usa substr() para extrair 2 caracteres de cada vez da string (dia, mês e ano).

echo "Digite a data no formato ddmmaa: ";
$data = trim(fgets(STDIN));

$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

echo "Dia = $dia" . PHP_EOL;
echo "Mês = $mes" . PHP_EOL;
echo "Ano = $ano" . PHP_EOL;
