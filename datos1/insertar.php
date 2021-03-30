<?php
include("conexion.php");

//datos del formulario
$nombre = trim($_POST['nombre']);   //trim()  para quitar espacios en blanco
$apellido = trim($_POST['apellido']);
$email = $_POST['email'];
$clave = $_POST['clave'];
$celular = $_POST['celular'];
$fecha = date("Y-m-d", strtotime($_POST['fecha'])); //transforma a formato fecha aceptado por la base de datos

$consulta = "INSERT INTO personales(id,nombre,apellido,email,clave,celular,fecha) VALUES (NULL, '$nombre', '$apellido', '$email', '$clave', '$celular', '$fecha')";
$resultado = mysqli_query($conexion, $consulta);

 if($resultado){
    ?>

    <h3 class="ok">Datos ingresados correctamente!</h3>
    <button><a href="index.html">Regresar</a></button>
    <button><a href="revisar.php">Ver Datos</a></button>
    <?php
    //header('Location: index.html');
}else{
    ?>
    <h3 class="bad">Ups ha ocurrido un error!</h3>
    <h3>Has ingresado un dato incorrecto</h3>
    <button><a href="index.html">Regresar</a></button>
    <?php
}
 

mysqli_close($conexion);

?>
