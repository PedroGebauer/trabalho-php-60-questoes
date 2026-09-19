<?php

// Explicação: usa intdiv() por 100 para isolar o algarismo da centena e depois verifica se ele é par ou ímpar com %.

echo "Digite um número de 3 algarismos (100 a 999): ";
$numero = (int) trim(fgets(STDIN));

$centena = intdiv($numero, 100);

if ($centena % 2 == 0) {
    echo "O algarismo da centena ($centena) é PAR." . PHP_EOL;
} else {
    echo "O algarismo da centena ($centena) é ÍMPAR." . PHP_EOL;
}
