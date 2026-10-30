<?php
require_once("../session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_SESSION['iddono']) && ($_SESSION['iddono'] == 1 || $_SESSION['iddono'] == 2)) {
        echo '<a href="perfil.php">Perfil</a><br>';
        echo '<a href="servicos.php">Serviços</a><br>';
        echo '<a href="animais.php">Animais</a><br>';
        echo '<a href="logout.php">Sair</a><br>';
    } 
    else {
        echo "<p>Você não está logado.</p>";
    }
    ?>
</body>
</html>