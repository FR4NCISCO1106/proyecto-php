<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insertar</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <?php include './menu.php' ?>

  <form method="post" action="./insertar_logica.php">
    <label id="id_mascota">Id mascota: <input id="id_mascota" name="id_mascota" type="text" required /></label>
    <label id="nombre_mascota">Nombre de la mascota: <input id="nombre_mascota" name="nombre_mascota" type="text" required /></label>
    <label id="raza">Raza: <input id="raza" name="raza" type="text" required /></label>
    <label id="nombre_cliente">Nombre del cliente: <input id="nombre_cliente" name="nombre_cliente" type="text" required /></label>
    <label id="fecha_nacimiento">Fecha de nacimiento: <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" required /></label>
    <legend>Sexo:</legend>
    <input type="radio" name="sexo" id="F" value="F" required>
    <label for="F">Femenino</label>
    <input type="radio" name="sexo" id="M" value="M">
    <label for="M">Masculino</label>
    <label id="tipo_mascota">Tipo de mascota:
      <select id="tipo_mascota" name="tipo_mascota" required>
        <option value="">Elige Una</option>
        <option value="Perro">Perro</option>
        <option value="Gato">Gato</option>
        <option value="Ave">Ave</option>
      </select>
    </label>
    <input id="registrar" name="Registrar" type="submit"/>
    <input id="limpiar" name="Limpiar" type="reset"/>
  </form>
</body>
</html>

