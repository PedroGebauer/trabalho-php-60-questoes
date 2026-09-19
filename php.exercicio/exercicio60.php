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
Descritivo: Escreva um programa conceitual que leia a quantidade de habitantes de uma cidade de forma que o programa se prepare para ler a idade de cada morador e calcular a média.
*******************************************************************************/

// Explicação: lê a quantidade de habitantes e usa um laço for para ler a idade de cada um, acumulando a
// soma das idades, que é então dividida pela quantidade de habitantes para obter a média.

echo "Digite a quantidade de habitantes da cidade: ";
$quantidade = (int) trim(fgets(STDIN));

if ($quantidade <= 0) {
    echo "Quantidade inválida." . PHP_EOL;
    exit;
}

$somaIdades = 0;

for ($i = 1; $i <= $quantidade; $i++) {
    echo "Digite a idade do morador $i: ";
    $idade = (int) trim(fgets(STDIN));
    $somaIdades += $idade;
}

$media = $somaIdades / $quantidade;

echo "Média de idade dos moradores: " . number_format($media, 2, ',', '.') . " anos" . PHP_EOL;
