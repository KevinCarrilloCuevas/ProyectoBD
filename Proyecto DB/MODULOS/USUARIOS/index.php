<!DOCTYPE html>
<html lang="es-MX">
<head>
	<title>GESTION DE USUARIOS</title>
	<meta charset="utf-8">
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"


</head>
<body>

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

<div class="container">
	<div class="row">
		<div class="col-sm-12 m-5">
			<a href="fomulario_usuarios.php" class="btn btn-primary float-right">Nuevo </a>
			<a href ="cerrarsesion.php" class="btn btn-primary float-right mb-5">Salir sesion</a>

		
	<div class="table-responsive">
		<table class="table table-stripped">
			<thead>
				<tr> 
					<th>Nombre</th>
					<th>Correo</th>
					<th>Telefono</th>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				<?php
				$Consulta ="SELECT * FROM usuario";
				$Resultado = mysqli_query($mysqli, $Consulta);
				while($Fila= mysqli_fetch_array($Resultado)){
				
				?>

				<tr>
					<td>   <?php echo $Fila ["Nombre_User"]; ?>  </td>
					
					<td>  <?php echo $Fila ["Correo_User"]; ?> </td>
					
					<td>  <?php echo $Fila ["Telefono_User"]; ?> </td>

					<td><a href="detalle_usuarios.php?id=<?php echo $Fila["ID_User"]; ?> ">Detallar</a></td>
					<td><a href="fedicion_usuario.php?id=<?php echo $Fila["ID_User"]; ?> ">Editar</a></td>
					<td><a href="eliminar_usuarios.php?id=<?php echo $Fila["ID_User"]; ?> ">Eliminar</a></td>


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