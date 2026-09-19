<?php
// Explicação: lê o nome e as duas notas (AV1 e AV2), soma as notas e divide por 2 para obter a média final.

echo "Digite o nome do aluno: ";
$nome = trim(fgets(STDIN));

echo "Digite a nota da AV1: ";
$av1 = (float) trim(fgets(STDIN));

echo "Digite a nota da AV2: ";
$av2 = (float) trim(fgets(STDIN));

$media = ($av1 + $av2) / 2;

echo "$nome - Média final = $media" . PHP_EOL;
