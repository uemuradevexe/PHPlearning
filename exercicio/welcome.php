<?php
session_start();

if(empty($_SESSION['user'])){
    header('Location: login.php');
    exit();
}

echo '<h1>BEM-VINDO, </h1><h1>' . $_SESSION['user'] . '</h1>';
echo '<br />';
echo '<a href="logout.php">sair</a>';
