<?php
// Explicação: verifica se o resto da divisão do número por 2 é zero (par) ou diferente de zero (ímpar).

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero % 2 == 0) {
    echo "$numero é PAR." . PHP_EOL;
} else {
    echo "$numero é ÍMPAR." . PHP_EOL;
}
