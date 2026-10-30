<?php
require_once("../session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Perfil: <?php echo($_SESSION['nome_dono']);?></title>
</head>
<body class= "home">
    <div>
    <img id="foto_perfil" src="<?php echo '../fotos_donos/' . $_SESSION['foto_dono']; ?>" alt="Foto do Dono"> <?php echo($_SESSION['nome_dono']); ?>
    </div>
</body>
</html>