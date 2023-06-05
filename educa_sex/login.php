<?php
include("conexion.php");
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Educasex - Inicio de Sesión</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <form class="formulario" action="temas.php">
        <h1>Educasex</h1>
        <h1>Inicio de Sesión</h1>

        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo Electrónico">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña">
            </div>

            <input type="submit" value="Login" class="button">
            <p>¿Se te ha olvidado la contraseña? <a class="link" href="recuperarvista.php">Recuperar Contraseña</a></p>
            <p>¿No tienes una cuenta? <a class="link" href="registrar.php">Regístrate</a></p>
        </div>
    </form>
</body>

</html>