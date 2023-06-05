<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Recuperar Contraseña</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <form class="formulario">
        <h1>Recuperar Contraseña</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Nombre Completo" name="nombre">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo Electrónico" name="correo">
            </div>
            <input type="submit" value="Recuperar" class="button">
            <p>¿Recuerdas tu contraseña? <a class="link" href="login.php">Iniciar Sesión</a></p>
        </div>
    </form>
</body>

</html>