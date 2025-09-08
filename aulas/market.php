<?php

$carrinho = ["sopa" => 4, "macarrao" => 12, "arroz" => 76 ];
$total = 0;
foreach($carrinho as $produto => $valor){
    echo "valor do $produto: $$valor <br />";
    $total += $valor;
}

echo $total;