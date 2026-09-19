<?php
// Explicação: usa o operador lógico && para validar o intervalo do ano de nascimento antes de calcular a idade.

echo "Digite o ano de nascimento: ";
$anoNascimento = (int) trim(fgets(STDIN));

echo "Digite o ano atual: ";
$anoAtual = (int) trim(fgets(STDIN));

if ($anoNascimento > 1900 && $anoNascimento <= $anoAtual) {
    $idade = $anoAtual - $anoNascimento;
    echo "Idade = $idade anos" . PHP_EOL;
} else {
    echo "Ano de nascimento inválido." . PHP_EOL;
}
