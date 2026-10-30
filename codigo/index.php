<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bem Vindo</title>
</head>
<body>
    <div>
        <H1>Império dos Bichos</H1>
        <h5>Bem-Vindo</h5>
        <form action="verifica_login.php" method="post">
            email:<br>
            <input type="email" name="email" required>
            <br>
            senha:<br>
            <input type="password" name="senha" required>
            <br>
            <input type="submit" value="Entrar">
        </form>
        <a href="usuario/form_usuario.php">Cadastre-se</a>
    </div>
</body>
</html>