<?php
    require_once("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha =$_POST['senha'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    // SEPARA O NOME DO ARQUIVO 
    $nome_arquivo = $_FILES['foto_dono']['name'];

    // CRIA UM CAMINHO TEMPORARIO
    $caminho_temporario = $_FILES['foto_dono']['tmp_name'];

    // SEPARA A EXTENSAO DO NOME DO ARQUIVO
    $extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

    // CRIA O NOVO NOME COM A FUNÇÃO DE CRIAR NOME ALEATORIO
    $novo_nome = uniqid() . "." . $extensao;

    // MOSTRA O CAMINHO DE DESTINO
    $caminho_destino = "foto_user/" . $novo_nome;

    // MOVE PRO CAMINHO DE DESTINO
    move_uploaded_file($caminho_temporario, $caminho_destino);

    $sql = "INSERT INTO dono (nome_dono, data_nascimento, cpf, endereco, email, senha, foto, telefone) VALUES ('$nome', '$data_nascimento', '$cpf', '$endereco', '$email', '$senha', '$novo_nome', '$telefone')";

    mysqli_query($conexao, $sql);

    header("Location: index.php");