<?php

// Explicação: lê um número real com (float) e divide por 3 para obter a terça parte.

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

echo "Terça parte = " . ($numero / 3) . PHP_EOL;
