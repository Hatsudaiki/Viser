

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>muestra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="muestracss/muestra.css"/>
</head>
<body>
    <div class="espacio">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre completo</th>
      <th scope="col">Correo electronico</th>
      <th scope="col">Usuario</th>
      <th scope="col">Ubicación</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Rol</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "login_register_db", 3307);

     $sql="SELECT * FROM usuarios";
     $resultado = mysqli_query($conexion, $sql);

     while($mostrar = mysqli_fetch_array($resultado)){

     
  ?>
    <tr>
      <td><?php echo $mostrar['Id'] ?></td>
      <td><?php echo $mostrar['Nombre_completo'] ?></td>
      <td><?php echo $mostrar['Correo_electronico'] ?></td>
      <td><?php echo $mostrar['Usuario'] ?></td>
      <td><?php echo $mostrar['Ubicacion'] ?></td>
      <td><?php echo $mostrar['Contrasena'] ?></td>
      <td><?php echo $mostrar['rol'] ?></td>

      <td>
      <!--Eliminar-->
      <form action="php/eliminar.php" method="POST">
        <input type="hidden" value="<?php echo $mostrar['Id'] ?>" name= "textid"readonly>
        <td> <input class="btn btn-danger" type="submit" value="Eliminar" name= "btneliminar"readonly></td>
     </form>
      </td>
      <td>
      <!--Editar-->
      <a class="btn btn-success" href= "php/editar.php?id=<?php echo $mostrar['Id']?>">Editar</a>
      </td>
 
    </tr>

    <?php
     };
     ?>

  </tbody>
</table>
</div>
</body>
</html>