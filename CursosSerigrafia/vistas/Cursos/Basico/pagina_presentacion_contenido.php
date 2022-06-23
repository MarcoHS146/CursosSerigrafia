<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
	<title>Cursos de Serigrafía</title>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../../../css/general.css" />
	<link rel="stylesheet" type="text/css" href="../../../css/index.css" />
	<link rel="stylesheet" type="text/css" href="../../../css/responsivo.css"/>
	<link rel="stylesheet" type="text/css" href="../../../css/secciones.css"/>
	<link rel="stylesheet" type="text/css" href="../../../css/menuhamburgesa.css" />
	<link rel="icon" type="img/vnd.microsoft.icon" href="../../../img/favicon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../../../js/jquery.min.js"></script>
	<script src="../../../js/hamburguesa.js"></script>
	<script src="../../../js/menuhamburguesa.js"></script>
</head>

<body>
	<?php
	session_start();
		if(isset($_SESSION['nombre'])){
		include "../../../controles/funciones.php";
		$conexion=conexion();
		$usuario=$_SESSION['nombre'];
	?>
	<div id="pagina">
	<?php  
		include ('../header.php');
		include ('../menu.php');
	?>
		<section id="content" class="content cuadro contenido-fondo">
			<div id="centercontent">
				<div class="hamburger">
					<div id="open-hide" class="hamburger-inner" onclick = "myFunction();">
						
					</div>
				</div>
	<?php 
		include ('../menuhamburgesa.php'); 
		include ('seccion_presentacion_contenido.php');
	?>			
			</div> <!--/centercontent-->
		</section> <!-- /content -->
	<?php  
		include ('../footer.php');
	?>
	</div> <!-- /pagina-->
	<?php
		}else{
			echo "no se puede visualizar el contenido";
		}
	?>
</body>

</html>
