<?php

// Explicação: lê um número inteiro e calcula antecessor (número - 1) e sucessor (número + 1).

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

echo "Antecessor = " . ($numero - 1) . PHP_EOL;
echo "Sucessor = " . ($numero + 1) . PHP_EOL;
