<?php 
//conectarse a la base de datos
require_once 'conexion.php';

//recibir los datos del formulario
$Nombre= $_POST['Nombre'];
$Telefono = $_POST['Telefono'];
$Direccion = $_POST['Direccion'];
$Correo = $_POST['Correo'];
$Password = $_POST['Password'];
$id=$_POST['id'];

//construir la consulta
$Consulta = "UPDATE usuario SET Nombre_User= '$Nombre', Telefono_User='$Telefono', Direccion_User='$Direccion', Correo_User='$Correo', Password_User ='$Password' WHERE ID_User=$id  ";
//Ejecutar la consulta
mysqli_query ($mysqli, $Consulta);
//Regresar al index
header("Location:index.php")

?>