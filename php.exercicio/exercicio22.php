<?php

// Explicação: aplica o acréscimo de 2% multiplicando o saldo por 1.02.

echo "Digite o saldo atual: ";
$saldo = (float) trim(fgets(STDIN));

$novoSaldo = $saldo * 1.02;

echo "Novo saldo = $novoSaldo" . PHP_EOL;
