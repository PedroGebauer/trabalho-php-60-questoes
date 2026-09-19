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
Descritivo: Escreva um programa que leia um número real e informe se ele é positivo, negativo ou nulo.
*******************************************************************************/

// Explicação: usa uma estrutura if/elseif/else para classificar o número em três possíveis categorias.

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

if ($numero > 0) {
    echo "O número é positivo." . PHP_EOL;
} elseif ($numero < 0) {
    echo "O número é negativo." . PHP_EOL;
} else {
    echo "O número é nulo." . PHP_EOL;
}
