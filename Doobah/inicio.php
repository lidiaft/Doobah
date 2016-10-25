<?php
	session_start();
	require_once("php/redirigir.php");
	ifIsNotLogged();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="icon" href="icons/favicon.ico" type="image/x-icon" sizes="16x16">
		<title>Doobah!</title>
		<link href="style/cabecera.css" rel="stylesheet" type="text/css" />
		<link href="style/barraSuperior.css" rel="stylesheet" type="text/css" />
		<link href="style/inicio.css" rel="stylesheet" type="text/css" />
		<link href="style/pie.css" rel="stylesheet" type="text/css" />
		
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>   
		<script src="js/popUp.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="overlay" class="overlay-container"></div>
		<div id="contenedor">					
			<!-- Cabecera-->
			<?php
				include('cabecera.php');
			?>
				
			<div id="barraSuperior">
				<div id="breadcrumb">
					<ul>
						<li><a href="<?php echo($_SESSION["main_page"]);?>">Inicio</a></li>
					</ul>
				</div>
				<div id="actividades">
					<button  id= "botonActividad" onclick="location.href='crearactividad.php'" type="button">Crear nueva actividad</button>
				</div >
				<div id="nuevoGrupo">
					<button  id= "botonGrupo" onclick="location.href='creargrupo.php'" type="button">Crear nuevo grupo</button>
				</div>
			</div>
			
			<div id="contenido">
				<fieldset id="favoritos" class="grupos"> <legend><a href="misGrupos.php">Mis grupos</a></legend>
						<?php 
							include('./php/dameMisGrupos.php'); 
						?>
					<div>
						<button class="botonVerMas" id="botonVerMasFav" type="button" onclick="location.href='misGrupos.php'" title="masGruposF">Ver más...</button>
					</div>
					
				</fieldset>
				
				<fieldset id="recomendados" class="grupos"> <legend><a href="recGrupos.php">Grupos recomendados</a></legend>
						<?php 
							include('./php/dameGruposRec.php'); 
						?>
					<div>
						<button class="botonVerMas" id="botonVerMasRec" type="button" onclick="location.href='recGrupos.php'" title="masGruposR">Ver más...</button>
					</div>
				</fieldset>
				
				<fieldset id="actCercanas" class="grupos">  <legend><a href="misActividades.php">Mis actividades</a></legend>
						<?php 
							include('./php/dameMisActividades.php'); 
						?>
					<div>
						<button class="botonVerMas" id="botonVerMasFav" type="button"  onclick="location.href='misActividades.php'" title="masGruposF">Ver más...</button>
					</div>
				</fieldset>
				
			</div>
		
			<!-- Pie -->
			<?php
				include('pie.php');
			?>
		</div>
		<div id="popC"></div>
	</body>
</html>