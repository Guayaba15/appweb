//<?php
include_once("sesiones.php");

$id = $_REQUEST['id'];

include_once("conectar_utd.php");
$consulta = "select * from contactos where id='$id'";
$resultado = mysqli_query($conex, $consulta);

if ($fila = mysqli_fetch_assoc($resultado)) {
    //regresa el registro de la consulta
}

//variable alert
$entrar = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $ape = $_POST['ape'];
    $dir = $_POST['dir'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    $consulta = "update contactos set nombre='$nombre',apellidos='$ape',direccion='$dir',telefono='$tel',email='$email' where id='$id'";

    $resultado = mysqli_query($conex, $consulta);

    if ($resultado) {
        //echo "<script>
        //         alert('.:: Registro Actualizado con Exito ::.');
        //           location.href='contactos1.php';
        //        </script>";
         $entrar="actualizar_contact";
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
    <h2 class="head1"> Editar datos del alumno </h2>
        <img class="user" src="../img/estudiante.png" alt="Error al cargar la imagen :c">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table align="center">
              <tr>
                <td>  <label for="nombre"> Nombre: </label> </td>
                <td><input type="text" name="nombre" placeholder="Escriba su usuario" autofocus value="<?php echo $fila['nombre'] ?>" required>
</td>
              </tr>
            <tr>
                  <td>  <label for="espec"> Apellidos: </label> </td>
                  <td>   <input type="text" name="ape" placeholder="Escriba su contraseña" value="<?php echo $fila['apellidos'] ?>" required></td>
                </tr>
              </div>
              <div class="form-group">
                <tr>
                  <td>  <label for="espec"> direccion: </label> </td>
                  <td>   <input type="text" name="dir" placeholder="Escriba su contraseña" value="<?php echo $fila['direccion'] ?>" required>
</td>
                </tr>
                <tr>
                  <td>  <label for="espec"> Telefono: </label> </td>
                  <td>  <input type="text" name="tel" placeholder="Escriba su contraseña" value="<?php echo $fila['telefono'] ?>" required>

</td>
                </tr>
                <tr>
                  <td>  <label for="espec"> E-mail: </label> </td>
                  <td>         <input type="text" name="email" placeholder="Escriba su contraseña" value="<?php echo $fila['email'] ?>" required:>

</td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn btn-primary" value="Actualizar"></td>
                    <td><input type="reset" class="btn btn-outline-primary" value="Borrar"></td>
                </tr>
            </table>
            <a href="contactos1.php"><input type="button" value="Administrar"></a>
            <input type="hidden" name="id" Value="<?php echo $fila['id'] ?> ">
        </form>
    </div>
    <hr>
</body>

</html>

<?php include_once('alert.php') ?>