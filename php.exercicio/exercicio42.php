<?php
// Explicação: usa o operador lógico && (E) para verificar se o resto da divisão por 3 e por 7 são ambos zero.

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero % 3 == 0 && $numero % 7 == 0) {
    echo "$numero é divisível por 3 e por 7 simultaneamente." . PHP_EOL;
} else {
    echo "$numero não é divisível por 3 e por 7 simultaneamente." . PHP_EOL;
}
