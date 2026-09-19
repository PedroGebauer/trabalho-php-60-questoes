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
Descritivo: Escreva um programa que leia o ano de nascimento de uma pessoa e o ano atual. Verifique se o ano de nascimento é um ano válido (maior que 1900 e menor ou igual ao ano atual) e exiba a idade calculada.
*******************************************************************************/

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
