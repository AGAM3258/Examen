<?php
	if(!isset($_SESSION)) //Busca la secion iniciada
    { 
        session_start(); //inicia la sesion
        $user = $_SESSION['id']; //almacena en una variable el numero de contorl
    }

	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "Examen";
	$conmysql = mysql_connect($host,$username,$password);
	mysql_select_db($db);

	$pass1 = $_POST['pass1'];	//extray la contraseña que ya esta registrada y almacenada en un INPUT
	$pass = $_POST['pass'];	//extray la contraseña del INPUT(la nueva contraseña)

	if ($pass == $user) {
		
     echo "<script>
                alert('Error with password');
                window.location= '../view/configAccount.php'
    </script>";

	}

	$sql = "UPDATE usertbl SET password='".$pass1."' WHERE id ='".$user."'"; //actualiza la contraseña del usuario
		mysql_select_db($db, $conmysql);
			$result2 = mysql_query($sql);

			     echo "<script>
                alert('They've been updated');
                window.location= '../view/configAccount.php'
    			</script>";

?>