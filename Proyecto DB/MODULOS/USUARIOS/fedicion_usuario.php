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

require_once 'conexion.php';

$id = $_GET ['id'];
$Consulta = "SELECT * FROM usuario WHERE ID_User = $id ";
$Resultado= mysqli_query($mysqli, $Consulta);

$Fila= mysqli_fetch_array($Resultado);
?>

<div class="container mt-5">
	<div class="row">
		<div class="col-sm-12">

			<form action="editar_usuario.php" method="POST">
				<div class="form-grup">
					<label for="Nombre_User">Nombre de usuario</label>
					<input type="text" name="Nombre" id="Nombre" placeholder="Ingresa tu nombre" class="form-control" value="<?php echo $Fila ['Nombre_User'];?>">
				</div>
				<div class="form-grup">
					<label for="Telefono_User">Telefono</label>
					<input type="text" name="Telefono" id="Telefono" placeholder="Ingresa tu telefono" class="form-control" value="<?php echo $Fila ['Telefono_User'];?>">
				</div>
				<div class="form-grup">
					<label for="Direccion_User">Direccion</label>
					<input type="text" name="Direccion" id="Direccion" placeholder="Ingresa tu direccion" class="form-control" value="<?php echo $Fila ['Direccion_User'];?>">
				</div>
				<div class="form-grup">
					<label for="Correo_User">Correo</label>
					<input type="email" name="Correo" id="Correo" placeholder="Ingresa tu correo" class="form-control" value="<?php echo $Fila ['Correo_User'];?>">
				</div>
				<div class="form-grup">
					<label for="Password_User">Contraseña</label>
			        <input type="text" name="Password" id="Password" placeholder="Ingresa tu contraseña" class="form-control" value="<?php echo $Fila ['Password_User'];?>">


			        <input type="hidden" name="id" id="id" placeholder="id" class="form-control" value="<?php echo $Fila ['ID_User'];?>">

				</div> 
				<br>
				<div class="form-grup">
					<input type="submit" value="Registrar Usuario" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>



</body>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
</html>