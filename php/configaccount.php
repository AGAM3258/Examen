<?php
	if(!isset($_SESSION)) //busca la sesion iniciada
    { 
        session_start(); //inicia la sesion
        $user = $_SESSION['id']; //extray la sesion del usuario
    }
/////////////////// Conecta a la BD //////////////////////////////////////
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "Examen";
	$conmysql = mysql_connect($host,$username,$password);
	mysql_select_db($db);

	$nocontrol = $_POST['id']; //extray el id del alumno ingresado en el INPUT
	$name = $_POST['name'];	//extray el nombre del alumno ingresado en el INPUT
	$email = $_POST['mail'];//extray el email del alumno ingresado en el INPUT

	/////////////////// Actualiza la TB de usertbl donde esta registrado el alumno//////////////////////////////////
	$sql = "UPDATE usertbl SET id='".$nocontrol."', nombre='".$name."', correo='".$email."' WHERE id ='".$user."'";
		mysql_select_db($db, $conmysql);
			$result2 = mysql_query($sql);

				     echo "<script>
                alert('It has been created successfully');
                window.location= 'closesion.php'
                 </script>";

?>