<?php
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
