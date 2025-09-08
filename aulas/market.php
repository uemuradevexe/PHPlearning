<?php

$carrinho = [
    1 => ["sopa" => 4],
    2 => ["macarrao" => 12],
    3 => ["arroz" => 76]
];

$total = 0;

foreach ($carrinho as $quantidade => $item) {
    foreach ($item as $nome => $preco_unitario) {
        $quant = (int) $quantidade;
        $linha_total = $quant * $preco_unitario;
        echo "valor do {$nome} (qtd {$quant}): ¥ " . number_format($linha_total, 0, ',', '.') . " <br />\n";
        $total += $linha_total;
    }
}

echo "<strong>Total: ¥ " . number_format($total, 0, ',', '.') . "</strong>";
