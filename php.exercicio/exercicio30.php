<?php
// Explicação: usa o operador módulo (%) para verificar se o resto da divisão por 3 é igual a zero.

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero % 3 == 0) {
    echo "$numero é divisível por 3." . PHP_EOL;
} else {
    echo "$numero não é divisível por 3." . PHP_EOL;
}
