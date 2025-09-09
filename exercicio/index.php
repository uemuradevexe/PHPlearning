<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="post" action="login.php">
        <label for="usarname">Usuario:</label>
        <input type="text" name="user"><br>
        <label for="password">Senha:</label>
        <input type="text" name="password"><br>
        <label for="lembrar">Tema preferido:</label>
        <select name="tema" id="">
            <option value="escuro">escuro</option>
            <option value="claro">claro</option>
        </select><br>
        <input type="submit" value="login">
    </form>    
</body>
</html>