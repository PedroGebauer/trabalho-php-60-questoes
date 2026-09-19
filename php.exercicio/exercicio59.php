<?php
// Explicação: calcula a idade a partir do ano de nascimento e do ano atual, e usa if/elseif/else para
// enquadrar o nadador na categoria correspondente conforme a tabela de faixas etárias.

echo "Digite o ano de nascimento do nadador: ";
$anoNascimento = (int) trim(fgets(STDIN));

echo "Digite o ano atual: ";
$anoAtual = (int) trim(fgets(STDIN));

$idade = $anoAtual - $anoNascimento;

if ($idade <= 4) {
    $categoria = 'Não aceito';
} elseif ($idade <= 7) {
    $categoria = 'Infantil A';
} elseif ($idade <= 10) {
    $categoria = 'Infantil B';
} elseif ($idade <= 13) {
    $categoria = 'Juvenil A';
} elseif ($idade <= 17) {
    $categoria = 'Juvenil B';
} else {
    $categoria = 'Sênior';
}

echo "Idade = $idade anos" . PHP_EOL;
echo "Categoria = $categoria" . PHP_EOL;
