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
Descritivo: Escreva um programa que leia a altura e o sexo ('M' ou 'F') de uma pessoa, e calcule e exiba o seu peso ideal utilizando as fórmulas: homens (72.7 * H) – 58; mulheres (62.1 * H) – 44.7.
*******************************************************************************/

// Explicação: usa if/else para escolher a fórmula correta de peso ideal de acordo com o sexo informado.

echo "Digite a altura (m): ";
$altura = (float) trim(fgets(STDIN));

echo "Digite o sexo (M ou F): ";
$sexo = strtoupper(trim(fgets(STDIN)));

if ($sexo == 'M') {
    $pesoIdeal = (72.7 * $altura) - 58;
    echo "Peso ideal = $pesoIdeal kg" . PHP_EOL;
} elseif ($sexo == 'F') {
    $pesoIdeal = (62.1 * $altura) - 44.7;
    echo "Peso ideal = $pesoIdeal kg" . PHP_EOL;
} else {
    echo "Sexo inválido." . PHP_EOL;
}
