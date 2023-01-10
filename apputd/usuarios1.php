<?php
include_once('sesiones.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Alumnos</title>
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://kit.fontawesome.com/baa2b31c54.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		$("#myInput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#myTable tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
		});
	</script>
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

	<h2 class="head" align=center> Administrar "Usuarios"</h2>
	<br>

	<div align="center">
		<?php if ($priv == "admin") { ?>
		<a class="button1" href="usuarios.php"> <input type="button" value="Nuevo usuario"> </a>
		<?php } ?>
		<input id="myInput" type="text" placeholder="Search..">
		<table class="table glass">
			<thead>
				<th class="table_head"> Usuario </th>
				<th class="table_head">Contraseña </th>
				<th class="table_head">Privilegio </th>
				<th class="table_head">Acciones</th>
			</thead>
			<tbody id="myTable">
			<?php
			include_once('conectar_utd.php');
			$consulta = "select * from usuarios";
			$resultado = mysqli_query($conex, $consulta);

			if (mysqli_num_rows($resultado) > 0) {
				while ($filla = mysqli_fetch_assoc($resultado)) {
			?>
					<tr>
						<td  class="table_data"><?php echo $filla['username'] ?></td>
						<td  class="table_data"><?php echo $filla['password'] ?></td>
						<td  class="table_data"><?php echo $filla['privilegios'] ?></td>
						
							<td  class="table_data" colspan="2">
							<a href="print_user.php?id=<?php echo $filla['id'] ?>"> <i class="ver fa-solid fa-print"></i> </a>
							<a  href="ver_usuario.php?id=<?php echo $filla['id'] ?>"><i class="ver fa-solid fa-eye"></i></a>
							<?php if ($priv == "admin") { ?>
								<a class="editar" href="edit_usuario.php?id=<?php echo $filla['id'] ?>"><i class="editar fa-solid fa-pen-to-square"></i></a>
								<a class="eliminar" href="eliminar_usuario.php?id=<?php echo $filla['id'] ?>"><i class="eliminar fa-solid fa-trash-can"></i></a>
							<?php } ?>
							</td>

					</tr>
			<?php
				}
			}
			?>
			</tbody>
		</table>
	</div>
	<h3 align="center"> Existen <?php echo mysqli_num_rows($resultado); ?> Usuarios </h3>

</body>

</html>