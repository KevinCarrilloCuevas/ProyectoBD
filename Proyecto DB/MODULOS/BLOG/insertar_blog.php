<?php 
//conectarse a la base de datos
require_once 'conexion.php';

//recibir los datos del formulario
$Titulo= $_POST['Titulo'];
$Descripcion = $_POST['Descripcion'];
$Fecha = $_POST['Fecha'];
$Autor = $_POST['Autor'];
$Categorias = $_POST['Categorias'];



//construir la consulta
$Consulta = "INSERT INTO blog (Titulo,Descrip,Fecha,Autor,Categorias_FK) 
VALUES ('$Titulo', '$Descripcion', '$Fecha', '$Autor', $Categorias)";
//Ejecutar la consulta
mysqli_query ($mysqli, $Consulta);
//Regresar al index
header("Location:index.php")

?>