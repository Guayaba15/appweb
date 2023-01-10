<?php

include_once('sesiones.php');

$entrar = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $user = $_POST['usuario'];
    $pw = $_POST['contraseña'];
    $privilegio = $_POST['priv'];

	$pw_enc = password_hash($pw,PASSWORD_DEFAULT);
    include_once('conectar_utd.php');

    $consulta = "insert into usuarios set username='$user', password='$pw_enc', privilegios='$privilegio'";
    $res = mysqli_query($conex, $consulta);

    if ($res){
    //  echo "<script>
    //  alert ('Se ha registrado con exito')
    //  location.href='usuarios.php';
    //  </script>";
    $entrar = 'insert_user';
    } else{
    //  echo "<script>
    //  alert ('Ups, ha ocurrido un fallo :c')
    //  location.href='usuarios.php';
    //  </script>";
    $entrar='error';   
   }
  }

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <title> Inicio </title>
</head>

<body>

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
    
	<form class="login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2 class="head" align="center">Agregar nuevo "Usuario"</h2>
    <br>
    <img class="user" src="../img/user.png" alt="Error al cargar la imagen :c">


		<table align="center">
			<tr>
				<td><label>Usuario:</label></td>
				<td><input type="text" placeholder="Usuario" name="usuario" required></td>
			</tr>
			<tr>
				<td><label>Contraseña:</label></td>
				<td><input type="password" placeholder="Contraseña" name="contraseña" required></td>
			</tr>
			<tr>
				<td><label>Privilegio:</label></td>
				<td>
					<select name="priv" required>
						<option value="admin">Admin</option>
						<option value="estandar">Estandar</option>
					</select>
				</td>
			</tr>
            <tr><br></tr>
			<td><input type="submit" value="Registrar"></td>
			<td><input type="reset" value="Borrar">
            <a href="usuarios1.php"><input type="button" value="Administrar"></a></td>

			</tr>
		</table>
    



</body>

</html>

<?php include_once('alert.php') ?>