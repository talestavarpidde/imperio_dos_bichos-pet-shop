<?php
    require_once("conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM dono WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);
    $quantidade = mysqli_num_rows($resultado);
    if ($quantidade == 1) {
        $linha = mysqli_fetch_array($resultado);
        $nome_dono = $linha['nome_dono'];
        $email = $linha['email'];
        $iddono = $linha['iddono'];
        $foto_dono = $linha['foto_dono'];
        
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['nome_dono'] = $nome_dono;
        $_SESSION['iddono'] = $iddono;
        $_SESSION['foto_dono'] = $foto_dono;
        
        header("Location: home.php");
    }
    else {
        header("Location: index.php?erro=login&email=$email");
    }