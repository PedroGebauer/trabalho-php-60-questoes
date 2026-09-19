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
Descritivo: Escreva um programa que leia um número inteiro positivo e exiba o dobro dele. Se o número for negativo, informe o erro.
*******************************************************************************/

// Explicação: usa uma estrutura condicional if/else para verificar o sinal do número antes de calcular o dobro.

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero < 0) {
    echo "Erro: o número informado é negativo." . PHP_EOL;
} else {
    echo "Dobro = " . ($numero * 2) . PHP_EOL;
}
