<?php
	if(!isset($_SESSION)) //busca si ahi una secion inciada
    { 
        session_start(); //conecta a la sesion
        $user = $_SESSION['id']; //extray el usuario que a iniciado la sesion
    }
/////////////////// Conexion a la BD ///////////////////////////
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "Examen";
	$conmysql = mysql_connect($host,$username,$password);
	mysql_select_db($db);

			$Idmaestro = $_GET['idmaestro'];	//extray el id del maestro
			$Idmateria = $_GET['idmateria'];	//extray el id de la materia
			/////////// Altera la tabla pra empesar del ultimo numero ingresado//////////////
			$ins='ALTER TABLE canalizados AUTO_INCREMENT = 1';
			mysql_select_db($db, $conmysql);
			$result = mysql_query($ins);

			//Inserta los datos del alumno a canalizar
	$sentencia='insert into canalizados values (';
	$comilla='"';
	$N='null';
	$coma=',';
	$parentesis=')';
	$insercion = $sentencia .$N. $coma .$comilla .$Idmaestro .$comilla .$coma . $comilla . $user .$comilla .$coma .$comilla .$Idmateria .$comilla .$parentesis;
	mysql_select_db($db, $conmysql);
	$result2 = mysql_query($insercion);

		/////////////////////////// Redirigir a la siguiente pagina /////////////////////////////////////////////////////////
		echo "<script>
				alert('The message has been sent');
		    	window.location= '../view/home_alumno.php'
		    </script>"
?>