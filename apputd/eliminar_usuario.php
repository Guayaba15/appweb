<?php

    include_once('sesiones.php');

    $id=$_REQUEST['id'];

    include_once('conectar_utd.php');
    
    $consulta="delete from usuarios where id='$id';";
    $resultado=mysqli_query($conex,$consulta);

    $entrar="";
    if ($resultado)
      {
      $entrar="eliminar_usuario";
      //   echo "<script>
      //   alert('Registro Eliminado Exitosamente');
      //   location.href='usuarios1.php';
      // </script>";
      }
      else
      {
      $entrar="error2";
      //     echo "<script>
      //     alert('Error al eliminar, Intentelo de Nuevo');
      //     location.href='usuarios1.php';
      //   </script>";
      }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  
</body>
</html>

<?php include_once("alert.php"); ?>