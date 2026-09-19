<?php

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
