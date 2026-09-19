<?php
// Explicação: lê uma linha do teclado com fgets(STDIN), converte para inteiro com (int) e exibe o valor lido.

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

echo "Número lido = $numero" . PHP_EOL;
