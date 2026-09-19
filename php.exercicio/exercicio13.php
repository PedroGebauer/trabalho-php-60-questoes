<?php

// Explicação: lê dois inteiros, soma-os e divide por 2 para obter a média aritmética simples.

echo "Digite o primeiro número inteiro: ";
$n1 = (int) trim(fgets(STDIN));

echo "Digite o segundo número inteiro: ";
$n2 = (int) trim(fgets(STDIN));

$media = ($n1 + $n2) / 2;

echo "Média = $media" . PHP_EOL;
