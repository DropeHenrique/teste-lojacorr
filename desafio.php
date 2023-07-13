<?php

function calcularNumeroDeCasas($valorTotal, $orcamento) {
    $precoPorCasa = $valorTotal / $orcamento;
    $numeroDeCasas = floor($orcamento / $precoPorCasa);
    $valorGasto = $numeroDeCasas * $precoPorCasa;

    return [
        'numero_de_casas' => $numeroDeCasas,
        'valor_gasto' => $valorGasto,
    ];
}

// Exemplo de uso:
$valorTotal = 1000000; // Valor total das casas
$orcamento = 500000; // Seu orçamento

$resultado = calcularNumeroDeCasas($valorTotal, $orcamento);

echo "Número de casas compradas: " . $resultado['numero_de_casas'] . "\n";
echo "Valor total gasto: " . $resultado['valor_gasto'] . "\n";
