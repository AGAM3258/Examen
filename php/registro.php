<?php
$db = mysql_connect('localhost', 'root', '');
mysql_select_db('Examen', $db);

	$user=$_POST["user"];
	$password=$_POST["password"];
	$username=$_POST["username"];
	$email=$_POST["email"];
	$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";//variable que guarda el abesedario



	if (preg_match('/[utem]{4}/',$email) && preg_match('/[edu]{3}/',$email) && preg_match('/[mx]{2}/',$email)) { //valida correo despues del @
		

//buscando al menos 2 caracteres seguidos en la cadena
if (preg_match('/[a2]{2}/',$email)) {	//valida si empieza el correo con 02
	$tipo= 'Alumno';

}else

if (preg_match('/[$permitidos]{2}/',$email)) { //Valida si empiesa con letras del abesedario
	$tipo= 'Maestro';

}

$ins='ALTER TABLE usertbl AUTO_INCREMENT = 1';	//Busca el ultimo numero
$result2 = mysql_query($ins , $db);

//inserta los datos en tabla usertbl
$sentencia='insert into usertbl values (';
$comilla='"';
$coma=',';
$parentesis=')';
$insercion = $sentencia .$user. $coma .$comilla .$password .$comilla .$coma . $comilla . $username .$comilla .$coma .$comilla .$email .$comilla .$coma .$comilla .$tipo .$comilla .$parentesis;

$result = mysql_query($insercion , $db);
	//redirecciona 
     echo "<script>
                alert('your registration has been processed, you can now log in');
                window.location= '../index.php'
    </script>";

    break;
}
//error del correo institucional
	     echo "<script>
                alert('Please use your institutional email');
                window.location= '../index.php'
    </script>";
?>