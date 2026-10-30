<?php
    require_once("conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM dono WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);
    $quantidade = mysqli_num_rows($resultado);
    if ($quantidade == 1) {
        $linha = mysqli_fetch_array($resultado);
        $nome = $linha['nome'];
        $email = $linha['email'];
        $idusuario = $linha['idusuario'];
        $foto = $linha['foto'];
        
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        $_SESSION['idusuario'] = $idusuario;
        $_SESSION['foto'] = $foto;
        
        header("Location: home.php");
    }
    else {
        header("Location: index.php?erro=login&email=$email");
    }