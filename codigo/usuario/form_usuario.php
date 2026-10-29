<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário</title>
</head>
<body>
    <h1>Novo Usuário</h1>
    <form action="save_usuario.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
        <br><br>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf">
        <br><br>
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento">
        <br><br>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco">
        <br><br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone">
        <br><br>
        <label for="foto_dono">Foto do Dono:</label>
        <input type="file" id="foto_dono" name="foto_dono">
        <br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>