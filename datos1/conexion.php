<?php
//Parametros a configurar para la conexion de la base de datos:
$host = "localhost";
$basededatos = "base0";
$usuariodb = "giandatos";
$clavedb = "datos";


$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
/* if($conexion->connect_errno){
    die("Conexion fallida: " .$conexion->connect_error);
} */
if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


?>
