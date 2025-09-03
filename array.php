<?php
    $lista = [true => 4.5, "qualquer" => 789, 2 => "ola"];
    echo $lista[1];

    $lista[2] = "novo valor"; // Substitui valor na chave 2
    $lista['qualquer'] = 999; // Substitui valor da chave 'qualquer'
    $lista[] = "novo valor"; // Adiciona ao final
    $lista['nova_chave'] = 123; // Adiciona com chave específica
    array_push($lista, "outro valor"); // Adiciona ao final
    array_unshift($lista, "primeiro valor"); // Adiciona ao início

    unset($lista[2]); // Remove elemento da chave 2
    unset($lista['qualquer']); // Remove elemento da chave 'qualquer'
    array_pop($lista); // Remove o último elemento
    array_shift($lista); // Remove o primeiro elemento

    sort($lista); // Ordena valores e reindexa (perde as chaves)
    asort($lista); // Ordena mantendo as chaves
    ksort($lista); // Ordena pelas chaves

    if (in_array(4.5, $lista)) {
        echo "Valor encontrado!";
    }

    var_dump($lista);
?>