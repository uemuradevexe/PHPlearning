<?php
session_start();


if (empty($_SESSION['user'])){
    header('Location: login.php');
    exit();
    
}    
$cor = '#ff1';
if (!empty($_COOKIE['tema'])) {
    $tema = $_COOKIE['tema'];
    $cor = ($tema === 'escuro') ? '#333' : '#fff';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina secreta</title>
    
</head>
<body style="background-color:<?= $cor ?>;">


    <?php
        echo '<h1>BEM-VINDO, </h1><h1>' . $_SESSION['user'] . '</h1>';
        echo '<br />';
        echo '<a href="logout.php">sair</a>';
    ?>

</body>
</html>




