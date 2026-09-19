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
Descritivo: Escreva um programa que leia três notas de um aluno, calcule a média aritmética simples e exiba a média e o conceito correspondente, conforme a tabela: Média >= 8.0: Conceito A; Média >= 5.0 e < 8.0: Conceito B; Média < 5.0: Conceito C.
*******************************************************************************/

// Explicação: calcula a média das três notas e usa if/elseif/else para classificar o conceito conforme a tabela.

echo "Digite a primeira nota: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite a segunda nota: ";
$n2 = (float) trim(fgets(STDIN));

echo "Digite a terceira nota: ";
$n3 = (float) trim(fgets(STDIN));

$media = ($n1 + $n2 + $n3) / 3;

if ($media >= 8.0) {
    $conceito = 'A';
} elseif ($media >= 5.0) {
    $conceito = 'B';
} else {
    $conceito = 'C';
}

echo "Média = $media" . PHP_EOL;
echo "Conceito = $conceito" . PHP_EOL;
