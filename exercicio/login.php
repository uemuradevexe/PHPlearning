<?php

session_start();

if(!empty($_POST['user']) && !empty($_POST['password'])){
    $usuario = htmlspecialchars($_POST['user']);
    $senha = htmlspecialchars($_POST['password']);

    if($usuario == 'admin' && $senha == 'admin'){
        $_SESSION['user'] = $usuario;
        header('Location: welcome.php');
    } else{
        echo 'usuario ou senha invalidos';
        echo '<a href="index.php">tentar novamente</a>';
    }
}  

if(empty($_POST['user']) || empty($_POST['password'])){
    echo "Preencha todos os dados <br />";
    echo '<a href="index.php">voltar</a>';
}