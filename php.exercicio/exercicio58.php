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
Descritivo: Escreva um programa que leia uma letra do teclado e informe se ela é uma vogal maiúscula, uma vogal minúscula ou uma consoante.
*******************************************************************************/

// Explicação: usa in_array() para verificar se o caractere lido pertence ao conjunto de vogais maiúsculas
// ou minúsculas; caso não pertença a nenhum dos dois, é classificado como consoante.

echo "Digite uma letra: ";
$letra = trim(fgets(STDIN));

$vogaisMaiusculas = ['A', 'E', 'I', 'O', 'U'];
$vogaisMinusculas = ['a', 'e', 'i', 'o', 'u'];

if (in_array($letra, $vogaisMaiusculas)) {
    echo "'$letra' é uma vogal MAIÚSCULA." . PHP_EOL;
} elseif (in_array($letra, $vogaisMinusculas)) {
    echo "'$letra' é uma vogal minúscula." . PHP_EOL;
} else {
    echo "'$letra' é uma consoante." . PHP_EOL;
}
