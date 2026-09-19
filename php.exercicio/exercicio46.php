<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: José Carlos Domingues Flores
Turma: [PREENCHER TURMA]
Componentes:
 [RA] - [Nome completo 1]
 [RA] - [Nome completo 2]
 [RA] - [Nome completo 3]
 [RA] - [Nome completo 4]
 [RA] - [Nome completo 5]
Data: [PREENCHER DATA DE ENTREGA]
Descritivo: Escreva um programa que leia a sigla do estado onde uma pessoa nasceu e informe se ela é carioca, paulista, mineira ou de outro estado (outros).
*******************************************************************************/

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
