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
Descritivo: Escreva um programa que leia dois números reais e exiba o maior de forma clara (abordagem focada em lógica estruturada de decisão composta).
*******************************************************************************/

// Explicação: diferente do exercício 33 (que usa max()), aqui a comparação é feita manualmente com
// uma estrutura if/elseif/else, tratando explicitamente os casos de A maior, B maior e empate.

echo "Digite o primeiro número real (A): ";
$a = (float) trim(fgets(STDIN));

echo "Digite o segundo número real (B): ";
$b = (float) trim(fgets(STDIN));

if ($a > $b) {
    echo "O maior número é A = $a" . PHP_EOL;
} elseif ($b > $a) {
    echo "O maior número é B = $b" . PHP_EOL;
} else {
    echo "Os dois números são iguais: $a" . PHP_EOL;
}
