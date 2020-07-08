<!DOCTYPE html>
<html lang="es-MX">
<head>
	<title>BLOG UNID</title>
	<meta charset="utf-8">
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"


</head>
<body class="bg-dark">

<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

if($varsesion == null || $varsesion = ''){
  header("Location://localhost/Proyecto%20DB/"); 
  die();
}
print_r($_SESSION);
?>


<?php 


require_once 'conexion.php';

?>
<div class="container mt-5">
	<div class="row">
		<div class="col-sm-12">
			<a href="fomulario_blog.php" class="btn btn-danger float-right mb-5">Nuevo </a>
			<a href ="cerrarsesion.php" class="btn btn-primary  mb-5">Salir sesion</a>
		</div>
		<div class="col-sm-12">
	<div class="table-responsive">
		<table class="table table-stripped table-dark table-hover table-dark">
			<thead class="thead-dark">
				<tr> 
					<th>Autor</th>
					<th>Fecha</th>
					<th>Titulo</th>
					<th>Categoria</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>

				<?php

				$Consulta ="SELECT * FROM blog";
				$Resultado = mysqli_query($mysqli, $Consulta);
				while($Fila= mysqli_fetch_array($Resultado)){
				
				?>

				<tr>
					<td>   <?php echo $Fila ["Autor"]; ?>  </td>
					
					<td>  <?php echo $Fila ["Fecha"]; ?> </td>
					
					<td>  <?php echo $Fila ["Titulo"]; ?> </td>

					<td>   <?php echo $Fila ["Categorias_FK"]; ?></td>

					<td><a href="detalle_blog.php?id=<?php echo $Fila["ID_User"]; ?> ">Detallar</a></td>
					<td><a href="fedicion_blog.php?id=<?php echo $Fila["ID_User"]; ?> ">Editar</a></td>
					<td><a href="eliminar_blog.php?id=<?php echo $Fila["ID_User"]; ?> ">Eliminar</a></td>
					


				</tr>
			<?php }?>
			</tbody>
		</table>
	</div>
	</div>
</div>
	</div>


</body>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
</html>