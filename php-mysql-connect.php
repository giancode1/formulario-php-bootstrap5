<?php
//php para probar si se conecta a una base de datos.
  $conn = new mysqli("localhost", "usuario", "pass", "db_name");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database.';

  $conn->close();
?>
