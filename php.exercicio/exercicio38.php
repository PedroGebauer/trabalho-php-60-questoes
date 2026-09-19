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
Descritivo: Escreva um programa que determine o grau de obesidade de uma pessoa a partir de seu peso (kg) e altura (m), calculando o IMC (Massa = Peso / Altura²) e classificando de acordo com a tabela: IMC < 26: Normal; IMC >= 26 e < 30: Obeso; IMC >= 30: Obeso Mórbido.
*******************************************************************************/

// Explicação: calcula o IMC com a fórmula peso / altura² e classifica com if/elseif/else conforme a tabela.

echo "Digite o peso (kg): ";
$peso = (float) trim(fgets(STDIN));

echo "Digite a altura (m): ";
$altura = (float) trim(fgets(STDIN));

$imc = $peso / ($altura * $altura);

if ($imc < 26) {
    $classificacao = 'Normal';
} elseif ($imc < 30) {
    $classificacao = 'Obeso';
} else {
    $classificacao = 'Obeso Mórbido';
}

echo "IMC = $imc" . PHP_EOL;
echo "Classificação = $classificacao" . PHP_EOL;
