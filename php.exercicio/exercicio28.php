<?php

// Explicação: usa if para verificar se o número é maior que 20 antes de calcular e exibir a metade.

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

if ($numero > 20) {
    echo "Metade = " . ($numero / 2) . PHP_EOL;
} else {
    echo "O número não é maior que 20." . PHP_EOL;
}
