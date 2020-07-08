<?php 
//conectarse a la base de datos
require_once 'conexion.php';

//recibir los datos del formulario
$Nombre= $_POST['Nombre'];
$Telefono = $_POST['Telefono'];
$Direccion = $_POST['Direccion'];
$Correo = $_POST['Correo'];
$Password = $_POST['Password'];


//construir la consulta
$Consulta = "INSERT INTO usuario (Nombre_User,Telefono_User,Direccion_User,Correo_User,Password_User) 
VALUES ('$Nombre', '$Telefono', '$Direccion', '$Correo', '$Password')";
//Ejecutar la consulta
mysqli_query ($mysqli, $Consulta);
//Regresar al index
header("Location:index.php")

?>