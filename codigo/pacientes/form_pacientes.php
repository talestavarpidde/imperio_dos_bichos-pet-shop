<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro  de pets</title>
</head>
<body>
    Novo Pet:
    <form action="salvar_paciente.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="especie">Foto:</label>
        <input type="file" name="foto_paciente" id="especie" required>
        <br>
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" required>
        <br>
        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo" required>
            <option value="">Selecione</option>
            <option value="M">Macho</option>
            <option value="F">Fêmea</option>
        </select>
        <br>
        <label for="raca">Raça/Porte:</label>
        <select name="raca" id="raca" required>
            <?php
            
            require_once("../conexao.php");
            
            $sql = "SELECT * FROM tipo_paciente;";
            
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultado = mysqli_stmt_get_result($comando);
            
            while ($linha = mysqli_fetch_array($resultado)) {
                $idtipo_paciente = $linha['idtipo_paciente'];
                $especie = $linha['especie'];
                $porte = $linha['porte'];
                echo "<option value='$idtipo_paciente'>$especie - $porte</option>";
            }
            ?>
        </select>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>