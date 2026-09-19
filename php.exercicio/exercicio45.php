<?php
// Explicação: usa uma estrutura switch para selecionar a operação aritmética de acordo com o operador digitado,
// tratando também o caso de divisão por zero e de operador inválido.

echo "Digite o primeiro número: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o operador (+, -, * ou /): ";
$operador = trim(fgets(STDIN));

echo "Digite o segundo número: ";
$n2 = (float) trim(fgets(STDIN));

switch ($operador) {
    case '+':
        echo "Resultado = " . ($n1 + $n2) . PHP_EOL;
        break;
    case '-':
        echo "Resultado = " . ($n1 - $n2) . PHP_EOL;
        break;
    case '*':
        echo "Resultado = " . ($n1 * $n2) . PHP_EOL;
        break;
    case '/':
        if ($n2 == 0) {
            echo "Erro: divisão por zero." . PHP_EOL;
        } else {
            echo "Resultado = " . ($n1 / $n2) . PHP_EOL;
        }
        break;
    default:
        echo "Operador inválido." . PHP_EOL;
}
