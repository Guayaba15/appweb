<?php

include_once('sesiones.php')

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
	<div class="contenedor">
		<div class="widget">
			<div class="fecha">
				<p id="diaSemana" class="diaSemana"></p>
				<p id="dia" class="dia"></p>
				<p>de</p>
				<p id="mes" class="mes"></p>
				<p>del</p>
				<p id="anio" class="anio"></p>
			</div>
			<div class="reloj">
				<p id="horas" class="horas"></p>
				<p>:</p>
				<p id="minutos" class="minutos"></p>
				<p>:</p>
				<div class="cajaSegundos">
					<p id="ampm" class="ampm"></p>
					<p id="segundos" class="segundos"></p>
				</div>
			</div>
		</div>
	</div>
	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
</body>

</html>