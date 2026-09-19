<?php

// Explicação: usa intdiv() para obter o quociente inteiro e o operador % para obter o resto da divisão.

echo "Digite o dividendo: ";
$dividendo = (int) trim(fgets(STDIN));

echo "Digite o divisor: ";
$divisor = (int) trim(fgets(STDIN));

$quociente = intdiv($dividendo, $divisor);
$resto = $dividendo % $divisor;

echo "Dividendo = $dividendo" . PHP_EOL;
echo "Divisor = $divisor" . PHP_EOL;
echo "Quociente = $quociente" . PHP_EOL;
echo "Resto = $resto" . PHP_EOL;
