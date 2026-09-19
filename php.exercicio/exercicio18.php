<?php
// Explicação: divide o número por 10 com intdiv() para remover a unidade e usa % 10 para isolar a dezena.

echo "Digite um número de 3 algarismos (100 a 999): ";
$numero = (int) trim(fgets(STDIN));

$dezena = intdiv($numero, 10) % 10;

echo "Algarismo da dezena = $dezena" . PHP_EOL;
