<?php 
 require_once 'conexion.php';
 $id=$_GET["id"];
 $Consulta ="DELETE FROM blog WHERE ID_User='$id'";
 mysqli_query($mysqli, $Consulta);
 header("Location:index.php")
 ?>