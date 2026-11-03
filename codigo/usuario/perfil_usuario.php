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
<br><br><br><br><br>
<?php
$dono = $_SESSION['iddono'];
require_once("../conexao.php");
$sql = "SELECT * FROM paciente WHERE iddono = $dono";
$posse = mysqli_query($conexao, $sql);
if (mysqli_num_rows($posse) == 0) {
    echo "<p>Você não possui animais cadastrados.</p>";
    echo "<br>";
    echo "<button><a href='../animais/form_animal.php'>Cadastre seu animal</a></button>";
} 
//else {
//    echo "<h2>Seus Animais:</h2>";
//    while ($animal = mysqli_fetch_assoc($posse)) {
//        echo "<div class='animal-card'>";
//        echo "<img src='../fotos_animais/" . $animal['foto_animal'] . "' alt='Foto do Animal'>";
//        echo "<p>Nome: " . $animal['nome_animal'] . "</p>";
//        echo "<p>Espécie: " . $animal['especie'] . "</p>";
//        echo "<p>Raça: " . $animal['raca'] . "</p>";
//        echo "<p>Idade: " . $animal['idade'] . "</p>";
//        echo "</div><br><br>";
//    }
//}
?>

</body>
</html>