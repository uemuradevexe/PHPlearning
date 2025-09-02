<?php
echo "<h1>Hello World</h1>";

$nome = "Ricardo";
$sobrenome = "Uemura";

echo strpos($nome, "a");

$nomeCompleto = $nome . " " . $sobrenome;
$idade = 21;

if (strlen($nome) < 7) {
    echo "o " . $nome . " " . $sobrenome . " que nome pequeno";
} else {
    echo "o " . $nome . " " . $sobrenome . " que baita nome";
}
?>