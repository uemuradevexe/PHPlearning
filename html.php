<?php

$nome = "Ricardo Uemura";
$idade = 21;
$sexo = "Masculino";
$salario_mensal = 180.000;
$empregado = true;
$skills = ["PHO","Laravel","livewire" 
, "MySQL", "JS", "TS", "Docker", "React", "Node", "Next.js"];
$aposentadoria;



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula1</title>
</head>

<body>

    <div class="container">
        <div class "card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?= $nome ?></strong></p>
            <p>Idade: <strong><?= $idade?></strong></p>
            <p>Sexo: <strong><?= $sexo?></strong></p>
            <p>Salario Mensal: <strong><?= $salario_mensal?></strong></p>
            <p>Salario Anual: <strong><?= $salario_mensal * 12 ?></strong></p>
            <p>Status de emprego: <strong><?php 
                if($empregado == true){
                    echo "Sim";
                } else {
                    echo "Negativo";
                }?></strong></p>
            <p>Anos de Aposentadoria: <strong><?php
                if($sexo == "Masculino"){
                    $aposentadoria = $idade - 65;
                    echo "$aposentadoria anos";
                } else {
                    $aposentadoria = $idade - 62;
                    echo "$aposentadoria anos";
                }
            ?></strong></p>
            <p>habilidades: <strong><?php 
                echo implode(", ", $skills);
            ?></strong></p>

        </div>
    </div>

</body>

</html>