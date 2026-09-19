<?php

// Explicação: extrai dia, mês e ano com substr() e concatena novamente na ordem mm-dd-aa.

echo "Digite a data no formato ddmmaa: ";
$data = trim(fgets(STDIN));

$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

echo "Data no formato mmddaa = " . $mes . $dia . $ano . PHP_EOL;
