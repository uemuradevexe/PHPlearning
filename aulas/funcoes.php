<?php

function saudacao (string $nome){
    return "ola mundo";
    
}

$oi = saudacao("nome");

echo $oi;

function somar (int $n1, int $n2):string {
    return $n1 + $n2;
}

echo somar($n1 = 17, $n2 = 70);

