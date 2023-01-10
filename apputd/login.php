<?php
session_start();

if (isset($_SESSION)) {
  session_destroy();
}


//variable alert
$entrar = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $us = $_POST['nombre'];
  $ps = $_POST['pass'];

  include_once('conectar_utd.php');
  
  $consulta = "select username,password,privilegios from usuarios where username='$us'";

  $resultado = mysqli_query($conex, $consulta);

  if (mysqli_num_rows($resultado) > 0) {
    if ($fila = mysqli_fetch_assoc($resultado)) {
      $contra = $fila ['password'];

      if(password_verify($ps, $contra)){
        $priv = $fila['privilegios'];


        session_start();
        $_SESSION['user'] = $us;
        $_SESSION['password'] = $ps;
        $_SESSION['priv'] = $priv;
  
        if ($priv == "admin") {
        //  echo "<script>
        //              alert('-Bienvenido- $us');
        //              location.href='menu.php';
        //            </script>";
           $entrar="admin";
        } else {
        //  echo "<script>
        //              alert('-Bienvenido- $us');
        //              location.href='menu.php';
        //            </script>";
          $entrar="estandar";
      }
      
      }
    }
  } else {
  //  echo "<script>
  //               alert('Usuario y contraseña incorrectas por favor verifique ...');
  //               location.href='login.php';
  //             </script>";
    $entrar = "error1";
  }
}

?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>LOGIN DE ACCESO</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">


</head>

<body>

  <div class="login">
    
    <h1> Iniciar sesion </h1>
    <img class="user" src="../img/user.png" alt="Error al cargar la imagen :c">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <table>
              <tr>
                <td>
                  <input type="text"   placeholder="Usuario" name="nombre" required >
                </td>
              </tr>
              <tr>
                <td>
                <input type="password"  placeholder="Contraseña" name="pass" required>
                </td>
              </tr>  
             <tr>
               <td colspan="2">
                   <input type="submit" name="enviar" value="Enviar" >
                   <input type="reset" name="borrar" value="Borrar" >
                </td>
             </tr>
          </table>
    </form>
  </div>

</body>

</html>

<?php include_once('alert.php') ?>