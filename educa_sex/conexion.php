<?php
$host="127.0.0.1";
$usuario="root";
$pass="";
$database="salud_sexual";

$conexion=new mysqli($host,$usuario,$pass,$database);

if($conexion->connect_error){
    echo"Error de conexión";
}
?>