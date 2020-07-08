<?php 
//conectarse a la base de datos
require_once 'conexion.php';

//recibir los datos del formulario
$Titulo= $_POST['Titulo'];
$Descripcion = $_POST['Descripcion'];
$Fecha = $_POST['Fecha'];
$Autor = $_POST['Autor'];
$id=$_POST['id'];


//construir la consulta
$Consulta = "UPDATE blog SET Titulo='$Titulo', Descrip='$Descripcion', Fecha='$Fecha', Autor ='$Autor'
WHERE ID_User=$id  ";
//Ejecutar la consulta
mysqli_query ($mysqli, $Consulta);
//Regresar al index
header("Location:index.php")

?>