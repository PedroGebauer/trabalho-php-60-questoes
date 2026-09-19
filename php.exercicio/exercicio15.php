<?php
// Explicação: lê nome e sobrenome separadamente e concatena na ordem invertida "sobrenome, nome".

echo "Digite o nome: ";
$nome = trim(fgets(STDIN));

echo "Digite o sobrenome: ";
$sobrenome = trim(fgets(STDIN));

echo "$sobrenome, $nome" . PHP_EOL;
