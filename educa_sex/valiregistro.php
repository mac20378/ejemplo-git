<?php
include('conexion.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCompleto = $_POST["nombreCompleto"];
    $correoElectronico = $_POST["correoElectronico"];
    $contrasena = $_POST["contrasena"];

    if (empty($nombreCompleto) || empty($correoElectronico) || empty($contrasena)) {
        echo "<script> alert('Por favor, completa todos los campos.')
        window.location.href=`registrar.php`;</script>";
    } else {
        $servidor = "localhost";
        $usuario = "root";
        $contrasena2 = "";
        $nombreBD = "salud_sexual";

        $conexion = mysqli_connect($servidor, $usuario, $contrasena2, $nombreBD);

        if (!$conexion) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

    
        $consulta = "INSERT INTO usuarios (nombreCompleto, correoElectronico, contrasena) VALUES ('$nombreCompleto', '$correoElectronico', '$contrasena')";

        if (mysqli_query($conexion, $consulta)) {
            echo "<script> alert('Usuario Registrado exitosamente')
            window.location.href=`login.php`</script>;";
        } else {
            echo "<script> alert('Error al registrar el usuario:$nombreCompleto')
            window.location.href=`registrar.php`</script>;" . mysqli_error($conexion);
        }  
        mysqli_close($conexion);
    }
}
?>
