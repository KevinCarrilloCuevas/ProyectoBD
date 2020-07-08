<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalles de Blog</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>

  <?php 
  require_once 'conexion.php'; 
  ?>
  <div class="conteiner">
  <div class="table-responsive">
    <table class="table table-stripped">
    <thead>
      <tr>

        <th>ID</th>
        <th>Titulo</th>
        <th>Descrpcion</th>
        <th>Fecha</th>
        <th>Autor</th>
        <th>Status</th>

      </tr>
    </thead>

    <tbody>

    

      <?php

      $id = $_GET['id'];
      $Consulta = "SELECT * FROM blog
       WHERE ID_User = $id";
      $Resultado = mysqli_query($mysqli, $Consulta);
      $Fila = mysqli_fetch_array($Resultado);
      ?>
      <tr class="table-info table-bordered ">
        <td><?php echo $Fila["ID_User"]; ?></td>

        <td><?php echo $Fila["Titulo"]; ?></td>

        <td><?php echo $Fila["Descrip"]; ?></td>

        <td><?php echo $Fila["Fecha"]; ?></td>

        <td><?php echo $Fila["Autor"]; ?></td>

        <td><?php echo $Fila["Status"]; ?></td>

        <td><a href="index.php">Regresar a la tabla principal</a></td>
      </tr>
    </tbody>
    </table>
  </div>
  </div>

  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>