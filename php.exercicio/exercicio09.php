<?php
// Explicação: lê três strings do teclado (nome, endereço e telefone) e imprime cada uma em sua própria linha.

echo "Digite o nome: ";
$nome = trim(fgets(STDIN));

echo "Digite o endereço: ";
$endereco = trim(fgets(STDIN));

echo "Digite o telefone: ";
$telefone = trim(fgets(STDIN));

echo "Nome: $nome" . PHP_EOL;
echo "Endereço: $endereco" . PHP_EOL;
echo "Telefone: $telefone" . PHP_EOL;
