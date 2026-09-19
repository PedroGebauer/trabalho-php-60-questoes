<?php
// Explicação: usa o operador relacional > para comparar o número lido com zero.

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero > 0) {
    echo "O número é estritamente maior que zero." . PHP_EOL;
} else {
    echo "O número não é maior que zero." . PHP_EOL;
}
