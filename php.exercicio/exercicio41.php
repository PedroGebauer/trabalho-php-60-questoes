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
Descritivo: Escreva um programa para calcular o imposto de renda anual de um contribuinte, lendo CPF, Nome, Rendimento Anual, Imposto Retido na Fonte, Contribuição Previdenciária, Despesas Médicas e Número de Dependentes, aplicando as deduções e a tabela de alíquotas, informando se há imposto a pagar ou a restituir.
*******************************************************************************/

// Explicação: soma as deduções (previdência + despesas médicas + R$1.080,00 por dependente), obtém a base
// de cálculo, aplica a alíquota da faixa correspondente com a parcela a deduzir, e compara o imposto devido
// com o imposto retido na fonte para determinar se há valor a pagar ou a restituir.

echo "Digite o CPF: ";
$cpf = trim(fgets(STDIN));

echo "Digite o nome: ";
$nome = trim(fgets(STDIN));

echo "Digite o rendimento anual: ";
$rendimentoAnual = (float) trim(fgets(STDIN));

echo "Digite o imposto retido na fonte: ";
$impostoRetido = (float) trim(fgets(STDIN));

echo "Digite a contribuição previdenciária: ";
$contribuicaoPrevidenciaria = (float) trim(fgets(STDIN));

echo "Digite as despesas médicas: ";
$despesasMedicas = (float) trim(fgets(STDIN));

echo "Digite o número de dependentes: ";
$numeroDependentes = (int) trim(fgets(STDIN));

$deducaoDependentes = $numeroDependentes * 1080.00;
$totalDeducoes = $contribuicaoPrevidenciaria + $despesasMedicas + $deducaoDependentes;
$baseCalculo = $rendimentoAnual - $totalDeducoes;

if ($baseCalculo <= 10800.00) {
    $aliquota = 0.00;
    $parcelaDeduzir = 0.00;
} elseif ($baseCalculo <= 21600.00) {
    $aliquota = 0.15;
    $parcelaDeduzir = 1620.00;
} else {
    $aliquota = 0.25;
    $parcelaDeduzir = 3780.00;
}

$impostoDevido = ($baseCalculo * $aliquota) - $parcelaDeduzir;
$diferenca = $impostoDevido - $impostoRetido;

echo "----- Declaração de Imposto de Renda -----" . PHP_EOL;
echo "CPF: $cpf" . PHP_EOL;
echo "Nome: $nome" . PHP_EOL;
echo "Total de deduções: R$ " . number_format($totalDeducoes, 2, ',', '.') . PHP_EOL;
echo "Base de cálculo: R$ " . number_format($baseCalculo, 2, ',', '.') . PHP_EOL;
echo "Imposto devido: R$ " . number_format($impostoDevido, 2, ',', '.') . PHP_EOL;

if ($diferenca > 0) {
    echo "Imposto a PAGAR: R$ " . number_format($diferenca, 2, ',', '.') . PHP_EOL;
} else {
    echo "Imposto a RESTITUIR: R$ " . number_format(abs($diferenca), 2, ',', '.') . PHP_EOL;
}
