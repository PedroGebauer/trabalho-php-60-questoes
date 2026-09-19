<?php
// Explicação: usa match() para obter o consumo (Km/l) conforme o tipo do veículo e divide a distância pelo
// consumo para estimar o total de litros necessários para o trajeto.

echo "Digite o tipo do veículo (A, B, C, D ou E): ";
$tipo = strtoupper(trim(fgets(STDIN)));

echo "Digite a distância a percorrer (Km): ";
$distancia = (float) trim(fgets(STDIN));

$consumoKmPorLitro = match ($tipo) {
    'A' => 13.5,
    'B' => 12.0,
    'C' => 10.5,
    'D' => 9.0,
    'E' => 7.5,
    default => 0,
};

if ($consumoKmPorLitro > 0) {
    $litros = $distancia / $consumoKmPorLitro;
    echo "Total estimado de combustível = " . number_format($litros, 2, ',', '.') . " litros" . PHP_EOL;
} else {
    echo "Tipo de veículo inválido." . PHP_EOL;
}
