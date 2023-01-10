<?php
include_once("sesiones.php");

$id = $_REQUEST['id'];

include_once("conectar_utd.php");
$consulta = "select * from usuarios where id='$id'";
$resultado = mysqli_query($conex, $consulta);

if ($fila = mysqli_fetch_assoc($resultado)) {
    //regresa el registro de la consulta
}

//variable alert
$entrar = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $us = $_POST['username'];
    $pass = $_POST['password'];
    $priv = $_POST['privilegios'];

    $consulta = "update usuarios set username='$us',password='$pass',privilegios='$priv' where id='$id'";

    $resultado = mysqli_query($conex, $consulta);

    if ($resultado) {
    //    echo "<script>
    //             alert('.:: Registro Actualizado con Exito ::.');
    //               location.href='usuarios1.php';
    //            </script>";
         $entrar="actualizar_user";
    } else {
    //    echo "<script>
    //                alert('Fallo la actualización, intentelo de nuevo ...');
    //                location.href='contactos1.php';
    //              </script>";
        $entrar="error";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Alumnos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- Aqui empieza Nuevo -->
    
    <div class="login">
    <h2 class="head1"> Editar datos del usuario </h2>
        <img class="user" src="../img/estudiante.png" alt="Error al cargar la imagen :c">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table align="center">
              <tr>
                <td>  <label for="nombre"> Usuario: </label> </td>
                <td><input type="text" name="username" placeholder="Escriba su usuario" autofocus value="<?php echo $fila['username'] ?>" required>
</td>
              </tr>
            <tr>
                  <td>  <label for="espec"> Contraseña: </label> </td>
                  <td>   <input type="text" name="password" placeholder="Escriba su contraseña" value="<?php echo $fila['password'] ?>" required></td>
                </tr>
              </div>
              <div class="form-group">
                <tr>
                  <td>  <label for="espec"> Privilegio: </label> </td>
                  <td>   <input type="text" name="ptivilegios" placeholder="Escriba su privilegio" value="<?php echo $fila['privilegios'] ?>" required>
</td>
                </tr>

                <tr>
                    <td><input type="submit" class="btn btn-primary" value="Actualizar"></td>
                    <td><input type="reset" class="btn btn-outline-primary" value="Borrar"></td>
                </tr>
            </table>
            <a href="usuarios1.php"><input type="button" value="Administrar"></a>
            <input type="hidden" name="id" Value="<?php echo $fila['id'] ?> ">
        </form>
    </div>
    <hr>
</body>

</html>

<?php include_once('alert.php') ?>