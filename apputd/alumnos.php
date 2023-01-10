<?php

include_once ('sesiones.php');

  $entrar="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $espec = $_POST['espec'];

    include_once('conectar_utd.php');

    $consulta = "INSERT INTO alumnos (matricula, nombre, especialidad) VALUES ('$matricula','$nombre','$espec')";
    $res = mysqli_query($conex, $consulta);

    if ($res){
    //  echo "<script>
    //  alert ('Se ha registrado con exito')
    //  location.href='alumnos1.php';
    //  </script>";
    $entrar = 'insert_alum';
    } else{
    //  echo "<script>
    //  alert ('Ups, ha ocurrido un fallo :c')
    //  location.href='alumnos1.php';
    //  </script>";
    $entrar = 'error';
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
	<p class="head">Sistema de Gestión de AppUTD</p>

  <header>
		<nav class="nav">
			<input type="checkbox"name=""id="nav__checkbox"class="nav__checkbox" />
			

			<ul class="nav__menu">
			<label for="nav__checkbox"class="nav__toggle">
			
				<svg class="menu"viewBox="0 0 448 512"width="100"title="bars">
				<path
					d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" />
				</svg>

			</label>
				<li><a href="menu.php">Inicio</a></li>
				<li><a href="alumnos1.php">Alumnos</a></li>
				<li><a href="contactos1.php">Contactos</a></li>
				<li><a href="usuarios1.php">Usuarios</a></li>
				<li class="si"><a href="login.php"> Cerrar sesion </a></li>
			</ul>
		</nav> 
	</header>
	
	<div class="login">
  <h2 class="head1" align="center">Agregar nuevo "Alumno"</h2>
  <img class="user" src="../img/estudiante.png" alt="Error al cargar la imagen :c">
	     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table align="center">
              <tr>
                <td><label>Matricula: </label></td>
                <td><input type="text" class="form-control" placeholder="Matricula" name="matricula" required></td>
              </tr>
            <tr>
                  <td><label>Nombre: </label></td>
                  <td><input type="text" class="form-control" placeholder="Nombre" name="nombre" required></td>
                </tr>
              </div>
              <div class="form-group">
                <tr>
                  <td><label>Especialidad:  </label></td>
                  <td><input type="text" class="form-control" placeholder="Especialidad" name="espec" required></td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn btn-primary" value="Enviar"></td>
                    <td><input type="reset" class="btn btn-outline-primary" value="Borrar"></td>
                </tr>
            </table>
            <a href="alumnos1.php"><input type="button" value="Administrar"></a>
            <input type="hidden" name="tab" value="a">
          </form>
		</div>
	<hr>
</body>
</html>

<?php include_once('alert.php'); ?> 