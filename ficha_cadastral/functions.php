<?php
/**
 * Calcula o salario anual da pessoa
 * 
 * @param float $salario_mensal : salario mensal da pessoa
 * @return float $salario_anual : recebe o $salario_mensal * 12 
 */
function calcularSalarioAnual(float $salario_mensal): float{
    $salario_anual = $salario_mensal * 12;
    return $salario_anual;
}

