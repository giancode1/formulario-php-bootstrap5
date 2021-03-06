<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Blog Datos</title>
</head>
<body>
    
    <nav class="navbar navbar-dark navbar-expand-md bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.php">Home</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">  <!-- d-flex justify-content-end -->
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="./revisar.php">Revisar Datos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Link</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

<div class="container">

    <form method="POST">
        <div class="mb-2">
            <label for="exampleInputName1" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="validationDefault01" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="exampleInputName1" class="form-label">Apellido</label>
            <input type="text" name="apellido" id="validationDefault02" class="form-control" required>
        </div>

        <div class="mb-2">
          <label for="floatingInputValue" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="floatingInputValue" placeholder="name@example.com" required>
        </div>

        <div class="mb-2">
          <label for="exampleInputPassword1" class="form-label">Clave</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="clave" required>
        </div>

        <div class="mb-2">
            <label for="exampleInputNumber1" class="form-label">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" required>
        </div>

        <div class="mb-2">
            <label for="exampleInputDate1" class="form-label" placeholder="2021-03-28">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required >
        </div>

        <button type="submit" name="submit" class="btn btn-success mt-2">Submit</button>
      </form>

<?php
include("conexion.php");

if(isset($_POST['submit'])){
  //datos del formulario
  $nombre = trim($_POST['nombre']);   //trim()  para quitar espacios en blanco
  $apellido = trim($_POST['apellido']);
  $email = trim($_POST['email']);
  $clave = $_POST['clave'];
  $celular = $_POST['celular'];
  $fecha = date("Y-m-d", strtotime($_POST['fecha'])); //transforma a formato fecha aceptado por la base de datos

  $consulta = "INSERT INTO personales(id,nombre,apellido,email,clave,celular,fecha) VALUES (NULL, '$nombre', '$apellido', '$email', '$clave', '$celular', '$fecha')";
  $resultado = mysqli_query($conexion, $consulta);

  if($resultado){
?>

    <script>
      swal("Correcto!", "Datos Ingresados!", "success")
    </script>

  <?php
  }else{
  ?>

    <script>
      swal("Error!", "Has ingresado un dato erroneo!", "error")
    </script>

  <?php
  }
  
  //mysqli_close($conexion);
  
}
  ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>