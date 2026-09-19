<?php

// Explicação: usa substr() para extrair 2 caracteres de cada vez da string (dia, mês e ano).

echo "Digite a data no formato ddmmaa: ";
$data = trim(fgets(STDIN));

$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

echo "Dia = $dia" . PHP_EOL;
echo "Mês = $mes" . PHP_EOL;
echo "Ano = $ano" . PHP_EOL;
