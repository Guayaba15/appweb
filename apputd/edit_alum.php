<?php
include_once("sesiones.php");

$matricula = $_REQUEST['matricula'];

include_once("conectar_utd.php");
$consulta = "select * from alumnos where matricula='$matricula'";
$resultado = mysqli_query($conex, $consulta);

if ($fila = mysqli_fetch_assoc($resultado)) {
    //regresa el registro de la consulta
}

//variable alert
$entrar = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $espec = $_POST['espec'];

    $consulta = "update alumnos set nombre='$nombre',especialidad='$espec' where matricula='$matricula'";

    $resultado = mysqli_query($conex, $consulta);

    if ($resultado) {
    //    echo "<script>
    //                alert('.:: Registro Actualizado con Exito ::.');
    //                location.href='alumnos1.php';
    //            </script>";
         $entrar="actualizar_alum";
    } else {
    //    echo "<script>
    //                alert('Fallo la actualización, intentelo de nuevo ...');
    //                location.href='alumnos1.php';
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
    <h2 class="head1" align="center"> Editar datos del alumno </h2>
        <img class="user" src="../img/estudiante.png" alt="Error al cargar la imagen :c">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <table>
            <tr>
                <td><label for="nombre"> Alumno: </label></td>
                <td><input type="text" name="nombre" placeholder="Escriba su usuario" autofocus value="<?php echo $fila['nombre'] ?>" required></td>
            </tr>
            <tr>
                <td><label for="espec"> Especialidad: </label></td>
                <td><input type="text" name="espec" placeholder="Escriba su contraseña" value="<?php echo $fila['especialidad'] ?>" required></td>
            </tr>
        </table>
        <br>
            <input type="submit" value="Actualizar">
            <input type="reset" name="borrar" value="Borrar">
            <a href="alumnos1.php"> <input type="button" value="Regresar"></a>
            <input type="hidden" name="matricula" Value="<?php echo $fila['matricula'] ?> ">
        </form>
    </div>
    <hr>
</body>

</html>

<?php include_once('alert.php') ?>