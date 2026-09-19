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
Descritivo: Escreva um programa que leia dois números inteiros (dividendo e divisor) e exiba na tela uma saída detalhada contendo: Dividendo, Divisor, Quociente (inteiro) e Resto da divisão.
*******************************************************************************/

// Explicação: usa intdiv() para obter o quociente inteiro e o operador % para obter o resto da divisão.

echo "Digite o dividendo: ";
$dividendo = (int) trim(fgets(STDIN));

echo "Digite o divisor: ";
$divisor = (int) trim(fgets(STDIN));

$quociente = intdiv($dividendo, $divisor);
$resto = $dividendo % $divisor;

echo "Dividendo = $dividendo" . PHP_EOL;
echo "Divisor = $divisor" . PHP_EOL;
echo "Quociente = $quociente" . PHP_EOL;
echo "Resto = $resto" . PHP_EOL;
