<?php
// Explicação: valida o mês (1-12) e, com base nele, define o número máximo de dias válidos, tratando
// fevereiro de forma especial ao verificar se o ano é bissexto (divisível por 4, exceto séculos não
// divisíveis por 400), permitindo 29 dias nesse caso.

echo "Digite o dia: ";
$dia = (int) trim(fgets(STDIN));

echo "Digite o mês: ";
$mes = (int) trim(fgets(STDIN));

echo "Digite o ano: ";
$ano = (int) trim(fgets(STDIN));

$dataValida = true;

if ($mes < 1 || $mes > 12) {
    $dataValida = false;
} else {
    $bissexto = ($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0);

    $diasNoMes = match ($mes) {
        4, 6, 9, 11 => 30,
        2 => $bissexto ? 29 : 28,
        default => 31,
    };

    if ($dia < 1 || $dia > $diasNoMes) {
        $dataValida = false;
    }
}

if ($dataValida) {
    echo "Data válida." . PHP_EOL;
} else {
    echo "Data inválida." . PHP_EOL;
}
