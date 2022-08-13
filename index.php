<?php
session_start();
$mensaje = "";

//isset() sirve para ver si una variable està definida 
//por lo tanto, devuelve true si lo està.
if (isset($_POST["iniciar"])){
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if($usuario == "ADMIN" && $contrasena == "12345"){
        //header es para redireccionar a otra pàgina

        if(!empty($_POST['tipousuario'])) {
            $_SESSION["user"]= $_POST['tipousuario'];

        }
        
        $_SESSION["autorizado"] = true;
        header("location: principal.php");
    }else{
        $mensaje = "Usuario y/o Contraseña incorrecta";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h2>LOGIN</h2>

    <form method="POST" action="index.php">
        <label for="">Usuario: </label>
        <input type="text" name="usuario" placeholder="Usuario">
        <br><br>
        <label for="">Contraseña: </label>
        <input type="password" name="contrasena" placeholder="Contraseña">
        <br><br>
        <select name="tipousuario" id="">
            <option value="administrador">Administrador</option>
            <option value="invitado">Invitado</option>
        </select>
        <button type="submit" name="iniciar">INICIAR SESIÒN</button>
    </form>
    <?php
        echo $mensaje;
    ?>
</body>
</html>