<?php
  $link = mysqli_connect("localhost", "root", "", "php_proyecto_mascota1");

  if (!$link) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
      . mysqli_connect_error());
  }
?>