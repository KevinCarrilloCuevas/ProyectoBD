<?php 
 require_once 'conexion.php';
$id = $_GET['id'];
$Consulta = "DELETE FROM usuario WHERE ID_User= $id ";
mysqli_query($mysqli, $Consulta);
echo "$Consulta";
header("Location:index.php");
 ?>