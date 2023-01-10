<?php

    include_once('sesiones.php');

    $matricula=$_REQUEST['matricula'];

    include_once('conectar_utd.php');
    
    $consulta="delete from alumnos where matricula='$matricula';";
    $resultado=mysqli_query($conex,$consulta);

    $entrar="";
    if ($resultado)
      {
         //echo "<script>
         //alert('Registro Eliminado Exitosamente');
         //location.href='alumnos1.php';
       //</script>";
      $entrar ='eliminar_alumn';
      }
      else
      {
        //$entrar="error2";
           echo "<script>
           alert('Registro No Eliminado, Intentelo de Nuevo');
           location.href='alumnos1.php';
         </script>";
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

<?php  include_once("alert.php"); ?>