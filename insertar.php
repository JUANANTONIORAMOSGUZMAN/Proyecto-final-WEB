<?php
require_once("autoload.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro</title>
</head>
<body>
    <?php
    if (isset($_POST["Inserta"])){
        ?>
        <form method="post">
            <label for="nombre">Nombre</label> 
            <input type="text" name="nombre" id="nombre"> <br>
            <label for="edad">Edad</label>
            <input type="text" name="edad" id="edad"> <br>
            <label for="correo">Correo</label>
            <input type="text" name="correo" id="correo"><br>
            <input type="submit" name="guardar" value="Guardar">
        </form>
        <?php

    } elseif(isset($_POST["guardar"])){
            $nombre=$_POST["nombre"];
            $edad=$_POST["edad"];
            $correo=$_POST["correo"];
            $inserta = new Acciones();
            $resultado = $inserta->Insertar($nombre, $edad, $correo);
            if ($resultado) header("location: http://localhost/mysql_php_poo/principal.php");
            else echo "Error al insertar registar la informacion";

    }else{
        header("location: http://localhost/mysql_php_poo/principal.php");
    }

    ?>    
</body>
</html>