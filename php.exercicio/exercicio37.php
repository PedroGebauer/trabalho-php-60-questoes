<?php
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
