<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href=" ../muestracss/procesar.css"/>
</head>
<body>
    <div class="espacio">
<table class="table">

  <tbody>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "login_register_db", 3307);
     $id = $_GET["id"];
     $sql="SELECT * FROM usuarios where Id='$id'";
     $resultado = mysqli_query($conexion, $sql);

     while($mostrar = mysqli_fetch_array($resultado)){

     
  ?>
    <form class= "form" action="procesar_editar.php" method="POST"> 
        <input type="hidden" value="<?php echo $mostrar['Id'] ?>" name="txtid">
        <p>Nombre completo</p>
        <input type="text" value="<?php echo $mostrar['Nombre_completo'] ?>" name="txtnombre">
        <p>Correo electronico</p>
        <input type="text" value="<?php echo $mostrar['Correo_electronico'] ?>" name="txtcorreo">
        <p>Usuario</p>
        <input type="text" value="<?php echo $mostrar['Usuario'] ?>" name="txtusuario">
        <p>Ubicación</p>
        <input type="text" value="<?php echo $mostrar['Ubicacion'] ?>" name="txtubicacion">
        <p>Contraseña</p>
        <input type="text" value="<?php echo $mostrar['Contrasena'] ?>" name="txtcontrasena">
        <p>Rol</p>
        <input type="text" value="<?php echo $mostrar['rol'] ?>" name="txtrol">

    

    <?php
     };
     ?>
     <input  class="botton" type="submit" value="Actualizar">
     <a href="../administrador.php" class="fa fa-sign-out"></a>
        
  </tbody>
</table>
</div>
</body>
</html>