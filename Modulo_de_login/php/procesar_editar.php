
<?php
  /*include 'conexion_be.php';*/
  
  $conexion = mysqli_connect("localhost", "root", "", "login_register_db", 3307);

    $id= $_POST ['txtid'];
    $nombre= $_POST ['txtnombre'];
    $correo= $_POST ['txtcorreo'];
    $usuario= $_POST ['txtusuario'];
    $ubicacion= $_POST ['txtubicacion'];
    $contrasena= $_POST ['txtcontrasena'];
    $rol= $_POST ['txtrol'];


    $ssql="UPDATE usuarios SET Nombre_completo = '$nombre', 
    Correo_electronico = '$correo', Usuario = '$usuario', 
    Ubicacion = '$ubicacion', Contrasena = '$contrasena', 
    rol = '$rol' WHERE Id='$id'";

    $resultado = mysqli_query($conexion, $ssql);
  
     /* if ($conexion->query($ssql)){
          echo 'Cliente actualizado';
      }else{
          echo 'Hubo un error' .$conexion->error .;
      }
     mysqli_query($conexion,"UPDATE 'usuarios' SET 'Nombre_completo' = '$nombre', 
    'Correo_electronico' = '$correo', 'Usuario' = '$usuario', 
    'Ubicacion' = '$ubicacion', 'Contrasena' = '$contrasena', 
    'rol' = '$rol' WHERE 'Id'='$id'")or die ("Error de actualizar");

    mysqli_close($conexion);*/

    header("location: ../muestra.php");
?>