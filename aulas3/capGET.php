<?php

if(!empty($_GET['campanha'])){
    $numero_campanha = $_GET['campanha'];
    echo "voce veio pela campanha " . $numero_campanha;
} else{
    echo "variavel nao definida";
}