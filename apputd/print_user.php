<?php
include_once("sesiones.php");

$id = $_REQUEST['id'];

include_once("conectar_utd.php");
$consulta = "select * from usuarios where id='$id'";
$resultado = mysqli_query($conex, $consulta);

if ($fila = mysqli_fetch_assoc($resultado)) {
    //regresa el registro de la consulta
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Alumno </title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body onload="window.print()">

    <div id="conte" class="imprimir">
        <div class="imprimir1">
           <table class="tablaprint">
            <tr>
                <td> Usuario: </td>
                <td style="text-align: center;"> <?php echo $fila['username']  ?> </td>
            </tr>

            <tr>
                <td> Contraseña: </td>
                <td style="text-align: center;"> <?php echo $fila['password']  ?> </td>
            </tr>

            <tr>
                <td> Privilegio: </td>
                <td style="text-align: center;"> <?php echo $fila['privilegios']  ?> </td>
            </tr>

           </table>
            <br>
            <br>
            <a class="button1" href="contactos1.php"> <input type="button" value="Regresar"> </a>
        </div>
    </div>
    <input type="hidden" name="matricula" Value="<?php echo $fila['id'] ?> ">
</body>

</html>