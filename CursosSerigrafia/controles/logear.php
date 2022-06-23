<?php 

require_once "funciones.php"; //traemos la conexion

 session_start();
$conexion=conexion();
$user=$_POST['usuario']; //se hace el Postback
$pass=$_POST['passw'];
$rol_obtenido=$user;
if($user=='admin'||$pass=='admin'){
	$sesion=$rol_seguro=sha1($rol_obtenido);
}elseif ($user=='invitado'||$pass=='1234') {
	$sesion=$rol_seguro=sha1($rol_obtenido);
}
$consulta_usuario=$conexion->prepare("SELECT nom_usuario, password from usuarios where nom_usuario=? AND password=?");
$consulta_usuario->bind_param('ss',$user,$pass);
$consulta_usuario->execute();
$consulta_usuario->store_result();
$consulta_usuario->fetch();

if (isset($sesion)=="d033e22ae348aeb5660fc2140aec35850c4da997" && $consulta_usuario->num_rows==1) {
	$mostrar=TRUE;
	$_SESSION['nombre']=$user;
	header('Location: ../vistas/pagina_principal.php');
}else{
	echo "No existe";
}

 ?>