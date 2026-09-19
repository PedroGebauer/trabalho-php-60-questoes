<?php
// Explicação: soma as três notas e subtrai a menor delas (obtida com min()), somando apenas as duas maiores,
// e depois divide o resultado por 2 para obter a média.

echo "Digite a primeira nota: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite a segunda nota: ";
$n2 = (float) trim(fgets(STDIN));

echo "Digite a terceira nota: ";
$n3 = (float) trim(fgets(STDIN));

$menor = min($n1, $n2, $n3);
$somaDuasMaiores = ($n1 + $n2 + $n3) - $menor;
$media = $somaDuasMaiores / 2;

echo "Média das duas maiores notas = $media" . PHP_EOL;
