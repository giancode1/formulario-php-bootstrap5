<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Revisar</title>
</head>
<body>
    
    <nav class="navbar navbar-dark navbar-expand-md bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html">Home</a>

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
  <!-- <button type="submit" name="btn2" class="btn btn-info mt-2">Consultar</button> -->
 
  <div class="table-responsive">
  <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Celular</th>
            <th scope="col">Fecha</th>
          </tr>
        </thead>
        <tbody>

        <?php
          include("conexion.php");
          $consulta = "SELECT * FROM personales";
          $resultados = mysqli_query($conexion, $consulta) or die ("Error");

        while($row = mysqli_fetch_array($resultados) ){
        ?>
         <tr>
           <td><?php echo $row['nombre'];   ?></td>
           <td><?php echo $row['apellido']; ?></td>
           <td><?php echo $row['email'] ;   ?></td>
           <td><?php echo $row['celular'];  ?></td>
           <td><?php echo $row['fecha'];    ?></td>
          </tr>
        <?php
        }
        ?>
        </tbody>
      </table>

  </div>

</div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>