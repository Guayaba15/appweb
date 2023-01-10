<?php
include_once("sesiones.php");

$matricula = $_REQUEST['matricula'];

include_once("conectar_utd.php");
$consulta = "select * from alumnos where matricula='$matricula'";
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

<body>

    <div id="cont" class="print">
        <div class="print1">
           <table class="tablaprint">
            <tr>
                <td> Nombre: </td>
                <td style="text-align: center;"> <?php echo $fila['nombre']  ?> </td>
            </tr>

            <tr>
                <td> Matricula: </td>
                <td style="text-align: center;"> <?php echo $fila['matricula']  ?> </td>
            </tr>

            <tr>
                <td> Especialidad: </td>
                <td style="text-align: center;"> <?php echo $fila['especialidad']  ?> </td>
            </tr>
           </table>
            <br>
            <br>
            <a class="button1" href="alumnos1.php"> <input type="button" value="Regresar"> </a>
        </div>
    </div>
    <input type="hidden" name="matricula" Value="<?php echo $fila['matricula'] ?> ">
</body>

</html>