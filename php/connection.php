

<?php 
	require_once 'constants.php'; //extray las variables
	$mysqli = new mysqli($hostname,$username,$password,$database); //realiza conexion
	if ($mysqli -> connect_errno){
		die("Fallo la conexion a MySql:(". $mysqli -> mysqli_connect_errno().")". $mysqli -> mysqli_connect_errno());
	}
 ?>