<?php
require 'functionform.php';

$erro = null;
$sucesso = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $texto = $_POST['texto'];
    
    //sanitizacao
    $texto = htmlspecialchars($texto);
    
    //remover os espacos antes e depois do texto
    $texto = trim($texto);

    $texto = filter_var($texto);

    
    

    //validar se o campo ta preenchido
    if(empty($texto)){
        $erro = "O campo texto deve ser preenchido";
        echo $erro;
    }elseif (strlen($texto) < 2) {
        $erro = "o texto tem que ser pelo menos 2 caracteres";
    }elseif (strlen($texto) > 100) { 
        $erro = "o texto nao pode ultrapassar 100 caracteres";
    }else{
        $sucesso = "o texto foi validado com sucesso";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1> Formulario </h1>

    <?php if (exibirErro($erro)) : ?>
    <p style ="color: red;">
        <?= $erro ?>
    </p>
    <?php endif; ?>
    <?php if (exibirErro($sucesso)) : ?>
    <p style ="color: green;">
        <?= $sucesso ?>
    </p>
     <?php endif; ?>
    <form method="POST">
        <input type="text" name="texto" placeholder="digite o texto">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>