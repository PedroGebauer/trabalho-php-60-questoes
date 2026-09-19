<?php

// Explicação: compara os dois nomes com strcmp() e usa if/else para exibi-los na ordem alfabética correta.

echo "Digite o primeiro nome: ";
$nome1 = trim(fgets(STDIN));

echo "Digite o segundo nome: ";
$nome2 = trim(fgets(STDIN));

if (strcmp($nome1, $nome2) <= 0) {
    echo "$nome1" . PHP_EOL;
    echo "$nome2" . PHP_EOL;
} else {
    echo "$nome2" . PHP_EOL;
    echo "$nome1" . PHP_EOL;
}
