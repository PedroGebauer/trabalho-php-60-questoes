<?php
// Explicação: lê dois inteiros do teclado, soma-os com o operador + e exibe o resultado precedido de "Soma: ".

echo "Digite o primeiro número inteiro: ";
$n1 = (int) trim(fgets(STDIN));

echo "Digite o segundo número inteiro: ";
$n2 = (int) trim(fgets(STDIN));

echo "Soma: " . ($n1 + $n2) . PHP_EOL;
