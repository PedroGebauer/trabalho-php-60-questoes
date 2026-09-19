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
Descritivo: Escreva um programa que implemente uma calculadora básica. O programa deve obter dois números reais do teclado e um operador caractere representando a operação matemática desejada ('+', '-', '*' e '/'). Efetue o cálculo e exiba o resultado.
*******************************************************************************/

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
