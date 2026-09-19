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
Descritivo: Uma empresa deseja aplicar um reajuste salarial aos seus funcionários. Escreva um programa que leia o nome do funcionário e seu salário atual e, de acordo com a tabela, calcule e exiba o novo salário: R$ 0.00 a R$ 1000.00: 20%; R$ 1000.01 a R$ 5000.00: 10%; acima de R$ 5000.00: 0%.
*******************************************************************************/

// Explicação: identifica a faixa salarial com if/elseif/else, aplica o percentual de reajuste correspondente
// e soma o reajuste ao salário atual para obter o novo salário.

echo "Digite o nome do funcionário: ";
$nome = trim(fgets(STDIN));

echo "Digite o salário atual: ";
$salario = (float) trim(fgets(STDIN));

if ($salario <= 1000.00) {
    $percentual = 0.20;
} elseif ($salario <= 5000.00) {
    $percentual = 0.10;
} else {
    $percentual = 0.00;
}

$novoSalario = $salario + ($salario * $percentual);

echo "Funcionário: $nome" . PHP_EOL;
echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.') . PHP_EOL;
