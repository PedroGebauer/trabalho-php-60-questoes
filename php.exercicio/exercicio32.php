<?php

// Explicação: usa uma estrutura if/elseif/else para classificar o número em três possíveis categorias.

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

if ($numero > 0) {
    echo "O número é positivo." . PHP_EOL;
} elseif ($numero < 0) {
    echo "O número é negativo." . PHP_EOL;
} else {
    echo "O número é nulo." . PHP_EOL;
}
