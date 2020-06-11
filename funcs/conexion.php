<?php
require 'vendor/autoload.php';
session_start();

/*$dbUrl=$_ENV["CLEARDB_DATABASE_URL"];
$url = parse_url($dbUr);

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$mysqli = new mysqli($server, $username, $password, $db);
if(isset($mysqli)){
	echo 'Conexión Fallida en db : ', mysqli_connect_error();
	
}*/

$mysqli=new mysqli("localhost","root","","login"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_error()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	
?>




	