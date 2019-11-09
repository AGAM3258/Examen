<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/stylefeedback.css">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/modal.css">
	<title>FeedBack</title>
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
<body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
	<form action="../php/feedback.php" method="post">
	<div id="Tittle"><center><h1>Feedback</h1></center></div><br><br>
		<h3>Pleace Feel Free And Let Us Know What You Think About The SSE</h3>
			<textarea class="mens" type="text" name="mens" id="mens" required="" size="250"></textarea>
		<h3>Tell Us How We Can Improve</h3>
			<textarea class="mens" type="text" name="mens2" id="mens2" required="" size="250"></textarea> 
	<br>
	<input type="submit" name="send" value="send">
</form>
<!--/////////////////////////inicio del modal//////////////////////-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        </div>
    </div>
</div>
</body>
	<?php 
	include("../footer/Footer.html")
	 ?>
</html>