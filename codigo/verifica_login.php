<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require_once("conexao.php");
    $sql = "SELECT * FROM dono WHERE email = ? AND senha = ?";
    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, "ss", $email, $senha);
    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);
    $quantidade = mysqli_num_rows($resultado);
    
    if ($quantidade == 1) {

        $linha = mysqli_fetch_array($resultado);

        $nome = $linha['nome_dono'];
        $email = $linha['email'];
        $iddono = $linha['iddono'];
        $foto = $linha['foto_dono'];
        
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        $_SESSION['nome_dono'] = $nome;
        $_SESSION['iddono'] = $iddono;
        $_SESSION['foto_dono'] = $foto;
        
        header("Location: home.php");
    }
    else {
        header("Location: index.php?erro=login&email=$email");
    }
?>