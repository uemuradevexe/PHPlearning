<?php
/**
 * gera uma string de saudacao
 * 
 * @param string $nome nome da pessoa
 * 
 * @return string retorna "ola mundo $nome"
 */
function saudacao (string $nome){
    return "ola mundo $nome";
    
}

$oi = saudacao("nome");

echo $oi;

/**
 * soma dois numeros
 * 
 * @param int $n1 primeiro numero  a ser somado
 * @param int $n2 segundo numero a ser somado
 * 
 * @return int retorna a soma dos dois numeros
 */
function somar (int $n1, int $n2):string {
    return $n1 + $n2;
}

echo somar($n1 = 17, $n2 = 70);

