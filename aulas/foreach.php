<?php 

$comidas = ["macarrao", "arroz", "cenoura", "banana"];

foreach ($comidas as $comida){
    echo "$comida <br />";

}




$pessoa = [
    "nome" => "Ricardo Uemura",
    "idade" => 21,
    "trabalho" => "programador"
];

foreach ($pessoa as $dado => $info){
    echo "$dado: $info <br />";
}