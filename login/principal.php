<?php
session_start();
if(!$_SESSION["autorizado"]){
    header("location: index.php");
}
?>


<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA WEB PRINCIPAL</title>
</head>
<body>
    <h2>PAGINA WEB PRINCIPAL</h2>
    <h3>BIENVENIDO <?php echo $_SESSION["user"];?></h3>
    <a href="cerrar.php">CERRAR SESIÒN</a>
</body>
</html>