<?php

// Explicação: usa switch para associar cada número de 1 a 7 ao nome do dia da semana correspondente.

echo "Digite um número de 1 a 7: ";
$dia = (int) trim(fgets(STDIN));

switch ($dia) {
    case 1:
        echo "Domingo" . PHP_EOL;
        break;
    case 2:
        echo "Segunda-feira" . PHP_EOL;
        break;
    case 3:
        echo "Terça-feira" . PHP_EOL;
        break;
    case 4:
        echo "Quarta-feira" . PHP_EOL;
        break;
    case 5:
        echo "Quinta-feira" . PHP_EOL;
        break;
    case 6:
        echo "Sexta-feira" . PHP_EOL;
        break;
    case 7:
        echo "Sábado" . PHP_EOL;
        break;
    default:
        echo "Número inválido." . PHP_EOL;
}
