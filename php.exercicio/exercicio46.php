<?php
// Explicação: usa switch para comparar a sigla do estado com RJ, SP e MG e classificar a naturalidade da pessoa.

echo "Digite a sigla do estado (ex: RJ, SP, MG): ";
$estado = strtoupper(trim(fgets(STDIN)));

switch ($estado) {
    case 'RJ':
        echo "A pessoa é carioca." . PHP_EOL;
        break;
    case 'SP':
        echo "A pessoa é paulista." . PHP_EOL;
        break;
    case 'MG':
        echo "A pessoa é mineira." . PHP_EOL;
        break;
    default:
        echo "A pessoa é de outro estado." . PHP_EOL;
}
