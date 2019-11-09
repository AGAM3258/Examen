<?php
	if(!isset($_SESSION)) //busca sesion inciado
    { 
        session_start(); //inicia sesion
    }
    ////Conexion en la BD///
    $host = "localhost";
	$username = "root";
	$password = "";
	$db = "Examen";
	$conmysql = mysql_connect($host,$username,$password);
	mysql_select_db($db);

	//almacenamiento de datos en las variables
	$pregunta=$_POST['pre'];
	$fecha= date("Y-m-d");
	//Inserta datos en tablas
	$sentencia='insert into pregunta_extra values (';
	$comilla='"';
	$N='null';
	$coma=',';
	$parentesis=')';
	$insercion = $sentencia .$N. $coma .$comilla .$pregunta .$comilla .$coma . $comilla . $fecha .$comilla .$parentesis;
	mysql_select_db($db, $conmysql);
	$result2 = mysql_query($insercion);

		echo "<script>
                alert('It has been created successfully');
                window.location= '../view/home_maestro.php'
             </script>";
?>
