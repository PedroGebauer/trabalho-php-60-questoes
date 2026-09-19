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
Descritivo: Escreva um programa que leia um número inteiro entre 1 e 7 e mostre o dia da semana correspondente (exemplo: 1 -> 'Domingo', 4 -> 'Quarta-feira', etc.).
*******************************************************************************/

// Explicação: usa switch para associar cada número de 1 a 7 ao nome do dia da semana correspondente.

echo "Digite um número de 1 a 7: ";
$dia = (int) trim(fgets(STDIN));

switch ($dia) {
    case 1:
        echo "Domingo" . PHP_EOL;
        break;
    case 2:
        echo "Segunda-feira" . PHP_EOL;
        break;
    case 3:
        echo "Terça-feira" . PHP_EOL;
        break;
    case 4:
        echo "Quarta-feira" . PHP_EOL;
        break;
    case 5:
        echo "Quinta-feira" . PHP_EOL;
        break;
    case 6:
        echo "Sexta-feira" . PHP_EOL;
        break;
    case 7:
        echo "Sábado" . PHP_EOL;
        break;
    default:
        echo "Número inválido." . PHP_EOL;
}
