<?php

// Explicação: lê o nome digitado pelo usuário com fgets(STDIN), remove espaços com trim() e monta a saudação.

echo "Digite seu nome: ";
$nome = trim(fgets(STDIN));

echo "Olá $nome!" . PHP_EOL;
