<?php
include 'conexion_be.php';

$id=$_POST['textid'];
mysqli_query($conexion, "DELETE FROM usuarios where Id='$id'")or die ("Error al eliminar");

mysqli_close($conexion);
header("location: ../muestra.php");
?>