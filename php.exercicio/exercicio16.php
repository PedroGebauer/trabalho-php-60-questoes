<?php
// Explicação: usa uma estrutura condicional if/else para verificar o sinal do número antes de calcular o dobro.

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero < 0) {
    echo "Erro: o número informado é negativo." . PHP_EOL;
} else {
    echo "Dobro = " . ($numero * 2) . PHP_EOL;
}
