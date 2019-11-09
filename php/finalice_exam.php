<?php
	if(!isset($_SESSION)) //busca la sesion iniciada
    { 
        session_start(); //conecta a la sesion
    }
////////////////////// Conexion a la bd//////////////////////////////////////
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "Examen";
	$conmysql = mysql_connect($host,$username,$password);
	mysql_select_db($db);

	//almacena las variables recuperadas
	$user = $_SESSION['id'];
	$finalizar = "finalizado";
	$fecha = $_POST['ExamFecha'];

	$sql = "UPDATE creacion SET estado='".$finalizar."' WHERE fecha_creacion ='".$fecha."' AND id_user ='".$user."'";//actualiza los datos que se han recuperado
	mysql_select_db($db, $conmysql);
	$result2 = mysql_query($sql);

	header('Location: ../view/home_maestro.php');
?>