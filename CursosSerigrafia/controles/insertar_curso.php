<?php  
require_once ('funciones.php');
$conexion=conexion();

$Nombre=$_POST['Nombre'];
$Nombre_corto=$_POST['Nombre_corto'];
$Temas=$_POST['Temas'];

if(isset($_POST['Crear_curso'])){

	if(empty($Nombre)){
		echo "<p class='error'>El campo Nombre es obligatorio.</p>";
	}
	if(empty($Nombre_corto)){
		echo "<p class='error'>El campo Nombre corto es obligatorio.</p>";
	}
	if(empty($Temas)){
		echo "<p class='error'>El campo Temas es obligatorio.</p>";
	}
	else{
	$stmt = $conexion->prepare("INSERT INTO cursos (nom_curso,nombre_corto,temas) VALUES (?,?,?)");
	$stmt->bind_param("ssi", $Nombre, $Nombre_corto, $Temas); 
	$stmt->execute();
	$stmt->store_result();
	$stmt->fetch();

	header("Location:../vistas/pagina_principal.php");
	mysqli_close($conexion);
	}
}
?>
