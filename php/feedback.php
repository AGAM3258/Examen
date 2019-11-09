<?php
	if(!isset($_SESSION)) //Busca una sesion inciada
    { 
        session_start(); //inicia sesion
    }

//////////// conexion a bd//////////////////////////////////////////////7
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "Examen";
	$conmysql = mysql_connect($host,$username,$password);
	mysql_select_db($db);

	$user = $_SESSION['id']; ////Extay el id del usuario

	$query2="SELECT correo  FROM usertbl  WHERE   id='".$user."'";	//busca la consulta
	$resultado2 = mysql_query($query2);		//consulta los datos buscados
	while ($row = mysql_fetch_array($resultado2))		//almacena el resultado de la consulta en un array
	{
		//Extray el resultaos de la comsulta
	$email=$row['correo'];
	$mensaje=$_POST['mens'];
	$mensaje2=$_POST['mens2'];

	//inserta datos en la bd
	$sentencia='insert into feedback values (';
	$comilla='"';
	$N='null';
	$coma=',';
	$parentesis=')';
	$insercion = $sentencia .$N. $coma .$comilla .$email .$comilla .$coma . $comilla . $mensaje .$comilla .$coma .$comilla .$mensaje2 .$comilla .$parentesis;
	mysql_select_db($db, $conmysql);
	$result2 = mysql_query($insercion);
}
?>