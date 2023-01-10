<?php

include_once('sesiones.php');

$entrar = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nombre = $_POST['nombre'];
  $ape = $_POST['apellidos'];
  $dir = $_POST['dir'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];

  include_once('conectar_utd.php');

  $consulta = "INSERT INTO contactos (nombre, apellidos, direccion, telefono, email) VALUES ('$nombre','$ape','$dir','$tel','$email')";
  $res = mysqli_query($conex, $consulta);

  if ($res) {
    //  echo "<script>
    //  alert ('Se ha registrado con exito')
    //  location.href='contactos1.php';
    //   </script>";
    $entrar='insert_contact';
  } else {
  //  echo "<script>
  //    alert ('Ups, ha ocurrido un fallo :c')
  //    location.href='contactos1.php';
  //    </script>";
  $entrar='insert_contact';
  }
}

?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Contactos</title>
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
    <h2 class="head1" align="center">Agregar nuevo "Contacto"</h2>
    <img class="user" src="../img/contacto.png" alt="Error al cargar la imagen :c">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <table align="center">
        <tr>
          <td><label> Nombre: </label></td>
          <td><input type="text" class="form-control" placeholder="Nombre" name="nombre" required></td>
        </tr>
        <tr>
          <td><label>Apellidos: </label></td>
          <td><input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required></td>
        </tr>
  </div>
  <div class="form-group">
    <tr>
      <td><label>Direccion: </label></td>
      <td><input type="text" class="form-control" placeholder="Direccion" name="dir" required></td>
    </tr>
    <tr>
      <td><label>Telefono: </label></td>
      <td><input type="text" class="form-control" placeholder="Telefono" name="tel" required></td>
    </tr>
    <tr>
      <td><label>E-Mail: </label></td>
      <td><input type="text" class="form-control" placeholder="E-mail" name="email" required></td>
    </tr>
    <tr>
      <td><input type="submit" class="btn btn-primary" value="Enviar"></td>
      <td><input type="reset" class="btn btn-outline-primary" value="Borrar"></td>
    </tr>
    </table>
    <a href="contactos1.php"><input type="button" value="Administrar"></a>
    <input type="hidden" name="tab" value="a">
    </form>
  </div>
  <hr>
</body>

</html>

<?php include_once('alert.php') ?>