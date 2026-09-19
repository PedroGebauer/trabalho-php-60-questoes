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
Descritivo: Escreva um programa que leia o ano de nascimento de um nadador e o ano atual, calcule a sua idade e classifique-o em uma categoria de acordo com a tabela: 0-4 Não aceito; 5-7 Infantil A; 8-10 Infantil B; 11-13 Juvenil A; 14-17 Juvenil B; Maiores de 17 Sênior.
*******************************************************************************/

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
