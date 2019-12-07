<?php 
#estableces conexion a la base de datos
require_once "conexion.php";
#control MVC.
require_once "controladores/control.php";
#iniciar sesion en linea
session_start();
#datos del inicio de sesion 
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$ventana = $_post['ventana'];

#mandar a llamar la funcion conectar de la conexion
$con = new Conexion();
$c = $con -> conectar();
#sentencia para verificar los datos de inicio de sesion en la base de datos
$sql = "SELECT COUNT(*) as contar from usuarios where usuario = '$usuario' and contraseña = '$pass'";
$consulta = mysqli_query($c,$sql);
$array = mysqli_fetch_array($consulta);
#verificar si existe el usuario dentro de la base de datos
if($array['contar'>0]){
	$_SESSION['username'] = $usuario;
	header("location: vistas/principal.php");
}else{
	echo "<script>alert('Datos incorrectos');</script>";
	header("location: vistas/principal.php");
}

 ?>