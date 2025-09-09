<?php

function diaSemana(int $dia): string{
    switch ($dia){
        case 1:
            return "Segunda-feira";
            break;
        case 2:
            return "Terca-feira";
            break;
        case 3:
            return "Quarta-feira";
            break;
        case 4:
            return "Quinta-feira";
            break;
        case 5:
            return "Sexta-feira";
            break;
        case 6:
            return "Sabado";
            break;
        case 7:
            return "Domingo";
            break;
        default:
            return error_log("erro: nao e possivel usar este numero, use apenas numeros de 1 a 7");
            break;
    }
}

echo diaSemana(19);