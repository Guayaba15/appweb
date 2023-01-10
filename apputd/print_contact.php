<?php
include_once("sesiones.php");

$id = $_REQUEST['id'];

include_once("conectar_utd.php");
$consulta = "select * from contactos where id='$id'";
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
                <td> Nombre: </td>
                <td style="text-align: center;"> <?php echo $fila['nombre']  ?> </td>
            </tr>

            <tr>
                <td> Apellidos: </td>
                <td style="text-align: center;"> <?php echo $fila['apellidos']  ?> </td>
            </tr>

            <tr>
                <td> Direccion: </td>
                <td style="text-align: center;"> <?php echo $fila['direccion']  ?> </td>
            </tr>
            <tr>
                <td> Telefono: </td>
                <td style="text-align: center;"> <?php echo $fila['telefono']  ?> </td>
            </tr>
            <tr>
                <td> E-mail: </td>
                <td style="text-align: center;"> <?php echo $fila['email']  ?> </td>
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