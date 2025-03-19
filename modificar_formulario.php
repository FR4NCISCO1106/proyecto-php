<?php include "./conexion.php"; ?>
<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Modificar Formulario</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <?php
    $sql = "SELECT * FROM usuarios WHERE id_mascota ='$_GET[mod]'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
  ?>
  <form id="form1" name="form1" method="post" action="modificar_logica.php">
    <label for="textfield">Nombre de la mascota: <input type="text" name="nombre_mascota" id="nombre_mascota" value="<?php print $row['nombre']; ?>" /></label>
    <label for="textfield2">Tipo de mascota: <input type="text" name="tipo_mascota" id="tipo_mascota" value="<?php print $row['tipo_mascota']; ?>" /></label>
    <label for="textfield3">Raza: <input type="text" name="raza" id="raza" value="<?php print $row['raza']; ?>" /></label>
    <label for="textfield3">Sexo: <input type="text" name="sexo" id="sexo" value="<?php print $row['sexo']; ?>" /></label>
    <label for="textfield3">Nombre del cliente: <input type="text" name="nombre_cliente" id="nombre_cliente" value="<?php print $row['nombre_cliente']; ?>" /></label>
    <label for="textfield3">Fecha de nacimiento: <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php print $row['fecha_nacimiento']; ?>" /></label>  
    </label>
    <input type="hidden" name="oculto" id="oculto" value="<?php print $row['id_mascota']; ?>" />
    <input type="submit" name="submit" id="submit" value="Enviar">
  </form>
</body>
</html>