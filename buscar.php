<?php include './conexion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Buscar</title>
</head>
<body>
<?php include './menu.php' ?>
  <form method="POST" name="form1">
    <div class="buscardor">
      <label for="buscar">Cedula: </label>
      <input type="text" name="buscar" id="buscar" />
      <input type="submit" value="Buscar" />
    </div>
  </form>
  <?php if (isset($_POST['buscar'])) { ?>
    <table>
      <tr>
      <th>ID MASCOTA</th>                              
      <th>NOMBRE</th>                           
      <th>TIPO DE MASCOTA</th>                        
      <th>RAZA</th>                                      
      <th>SEXO</th>                                      
      <th>NOMBRE DEL CLIENTE</th>                        
      <th>FECHA DE NACIMIENTO</th> 
      <?php
      $sql = "SELECT * FROM usuarios WHERE id_mascota ='$_POST[buscar]'";
      $result = mysqli_query($link, $sql); //ejecuto la consulta
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <tr>
        <td><?= $row['id_mascota']; ?></td>
        <td><?= $row['nombre']; ?></td>
        <td><?= $row['tipo_mascota']; ?></td>
        <td><?= $row['raza']; ?></td>
        <td><?= $row['sexo']; ?></td>
        <td><?= $row['nombre_cliente']; ?></td>
        <td><?= $row['fecha_nacimiento']; ?></td>
        </tr> <?php } ?>
    </table> <?php } ?>
</body>
</html>