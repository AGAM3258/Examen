<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$db = mysql_connect('localhost', 'root', '');
mysql_select_db('Examen', $db);

	$control = $_SESSION['id'];	//toma el campo del formulario anterior
	$fecha = date("Y-m-d");	//Busca la fecha
	$materia = 1;

	$query="SELECT id, nombre FROM usertbl WHERE id=".$control; //mediante el numero de control busca el nombre del usuario
	$resultado = mysql_query($query);
		while ($row1 = mysql_fetch_array($resultado))		 //almacena en un array el resultado de la consulta
	{

	$user = $row1['nombre'];
	$mensaje = "This Exam Was Create By.<b> $user </b>Now You Can Start Your Test.";

	//Almacena los datos adquiridos dentro de la BD
	$ins='ALTER TABLE creacion AUTO_INCREMENT = 1';
	$result2 = mysql_query($ins , $db);

			date_default_timezone_set('UTC');
			date_default_timezone_set("America/Mexico_City");
			setlocale(LC_TIME, 'spanish');
			$hora = strftime("%I:%M");

	$sentencia='insert into creacion values (';
	$comilla='"';
	$N='null';
	$estado='creado';
	$coma=',';
	$parentesis=')';
	$insercion = $sentencia .$N. $coma .$comilla .$control .$comilla .$coma . $comilla .$fecha .$comilla .$coma .$comilla .$estado .$comilla .$coma .$comilla .$mensaje .$comilla .$coma .$comilla .$hora .$comilla .$coma .$comilla .$materia .$comilla .$parentesis;

	$result = mysql_query($insercion , $db);

	     echo "<script>
                alert('It has been created successfully');
                window.location= '../view/home_maestro.php'
                 </script>";

	}
	             	     echo "<script>
                alert('There is an error in your control number');
                window.location= '../view/home_maestro.php'
                 </script>";
?>
