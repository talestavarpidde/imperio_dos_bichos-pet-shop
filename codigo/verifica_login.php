<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM dono WHERE email = '$email' AND senha = '$senha'";
    
    require_once "conexao.php";
    $resultado = mysqli_query($conexao, $sql);

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