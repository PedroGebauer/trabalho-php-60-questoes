<?php
// Explicação: usa if/else para decidir entre calcular o inverso (positivo) ou o valor absoluto (não positivo).

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

if ($numero > 0) {
    echo "Inverso = " . (1 / $numero) . PHP_EOL;
} else {
    echo "Valor absoluto = " . ($numero * -1) . PHP_EOL;
}
