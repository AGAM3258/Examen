<!DOCTYPE html>
<html>
<head>
	<title>AboutUS</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<style type="text/css">
			    footer {
  background-color: black;
  position: absolute;
  width: 100%;
  height: 40px;
  color: white;
  text-align: center;
  font-family: sans-serif;
  bottom: 0;
  position:fixed;
    }
		</style>
		<?php
	//Verifica el tipo de usuario para colocar el head
		$host="localhost";
		$username = "root";
		$password = "";
		$db ="Examen";
		$conmysql = mysql_connect($host,$username,$password);
		mysql_select_db($db);
	    if(!isset($_SESSION)) 
    { 
        session_start(); //busca que este iniciada la sesion
    }
    $id=$_SESSION['id'];//id de usuario
	$query2="SELECT tipo_user FROM usertbl WHERE id=".$id; //busca el usuario que inicio sesion
	$result = mysql_query($query2);
	while ($row3 = mysql_fetch_array($result))//Almacena el tipo de usuario 
	{
		$tipo = $row3['tipo_user'];
		$tipo1 = "Alumno";
		$tipo2 = "Maestro";

		if ($tipo == $tipo1){//compara que el suaurio sea de tipo alumno
			include ("../header/head_home_alumno.php");
		}else
		if ($tipo == $tipo2){//compara que el usuario sea de tipo maestro
			include ("../header/head_home_maestro.php");
		}
	} 
 ?>
</head>
<body  style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
	<div style="font-size: 20px;">
		<center>
			<p><h3>About US</h3><br>Our mission is that all the students of the Technological Univesity of Manzanillo can do their exams and evaluations online. This way we'll help  the enviroment avoiding the use of more paper and of course we will also provide a better way to evaluate.<br><br>Our objetive is that all the students of the Technological University of Manzanillo can use our system to do the exams or  evaluations; and our system can be implemented in all the UTs.<br><br><br><h3>Who are we?</h3><br> we are student´s of the career of Tic´s. SSE is taking place in our University Technologincal of Manzanillo to make a change.</p>
		</center>
	</div>
</body>
<footer class="container-fluid">
  <a href="aboutUS.php">About Us</a>
  <a href="contactUS.php">Contact Us</a>
</footer>
</html>