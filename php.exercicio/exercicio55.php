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
Descritivo: Escreva um programa que leia um número inteiro entre 1 e 12 e exiba o nome do mês correspondente por extenso.
*******************************************************************************/

// Explicação: usa switch para associar cada número de 1 a 12 ao nome do mês correspondente.

echo "Digite um número de 1 a 12: ";
$mes = (int) trim(fgets(STDIN));

switch ($mes) {
    case 1:
        echo "Janeiro" . PHP_EOL;
        break;
    case 2:
        echo "Fevereiro" . PHP_EOL;
        break;
    case 3:
        echo "Março" . PHP_EOL;
        break;
    case 4:
        echo "Abril" . PHP_EOL;
        break;
    case 5:
        echo "Maio" . PHP_EOL;
        break;
    case 6:
        echo "Junho" . PHP_EOL;
        break;
    case 7:
        echo "Julho" . PHP_EOL;
        break;
    case 8:
        echo "Agosto" . PHP_EOL;
        break;
    case 9:
        echo "Setembro" . PHP_EOL;
        break;
    case 10:
        echo "Outubro" . PHP_EOL;
        break;
    case 11:
        echo "Novembro" . PHP_EOL;
        break;
    case 12:
        echo "Dezembro" . PHP_EOL;
        break;
    default:
        echo "Número inválido." . PHP_EOL;
}
