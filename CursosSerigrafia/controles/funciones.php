<?php 
function conexion(){

if( ! isset($dbuser) )
	$dbuser = 'root'; // Usaurio de la base de datos = root
if( ! isset($dbcontrasenia) )
	$dbcontrasenia = ''; // Contraseña de la base de datos = '' 

$dbbase = 'SerigrafiaCursos'; // Nombre de la base de datos = a1
$dbhost = '127.0.0.1'; // URL del servidor Web = 127.0.0.1 o localhost

$conexion = new mysqli($dbhost, $dbuser, $dbcontrasenia, $dbbase);

if (mysqli_connect_error()){
	die("<hr>Error en la conexi&oacute;n.<hr>No se pudo realizar la conexión con la base de datos.<hr>" . $conexion->connect_error . "<hr>" . $conexion->connect_error . "<hr>" );
}

$conexion->set_charset('utf8');
return $conexion;

mysqli_close($conexion);
}
?>