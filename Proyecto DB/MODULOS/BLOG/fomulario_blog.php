<!DOCTYPE html>
<html lang="es-MX">
<head>
	<title>BLOG</title>
	<meta charset="utf-8">
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"


</head>
<body class="d-block p-2 bg-info text-white">

<?php 

require_once 'conexion.php';

?>

<div class="container mt-5">
	<div class="row">
		<div class="col-sm-12">

			<form action="insertar_blog.php" method="POST">
				<div class="form-grup">
					<label for="Nombre_User">Titulo</label>
					<input type="text" name="Titulo" id="Titulo" placeholder="Ingresa el Titulo" class="form-control">
				</div>
				<div class="form-grup">
					<label for="Telefono_User">Descripcion</label>
					<input type="text" name="Descripcion" id="Descripcion" placeholder="Ingresa la Descripcion" class="form-control">
				</div>
				<div class="form-grup">
					<label for="Direccion_User">Fecha</label>
					<input type="date" name="Fecha" id="Fecha" placeholder="Ingresa la Fecha" class="form-control">
				</div>
				<div class="form-grup">
					<label for="Correo_User">Autor</label>
					<input type="text" name="Autor" id="Autor" placeholder="Ingresa el Autor" class="form-control">
				</div>
				 <div class="form-group ">
                    <label for="NombreCat">Categorias</label>
                    <select  id="Categorias" name="Categorias" class="form-control">
                    	<option selected>Elije</option>
                    	<option value="1">Accion</option>
                    	<option value="2">Comedia</option>
                    	<option value="7">Romance</option>
                    	<option value="8">Investigacion</option>
                    	<option value="9">Terror</option>
                    	<option value="10">Educación</option>

                    </select>
                </div>

				<br>
				<div class="form-grup">
					<input type="submit" value="Postear" class="btn btn-success">
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