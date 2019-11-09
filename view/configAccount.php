<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Config</title>
	<style type="text/css">
		.button{background: #5858FF; border: 1px solid #5858FF; color: white; width: 200px; position: absolute;left: 80px;}
		.button:hover{background: #fff; color: black; border:1px solid #5858FF;}
	</style>
		<?php

	    if(!isset($_SESSION)) 
    { 
        session_start(); //busca que este iniciada la sesion
    }
	//Verifica el tipo de usuario para colocar el head
		$host="localhost";
		$username = "root";
		$password = "";
		$db ="Examen";
		$conmysql = mysql_connect($host,$username,$password);
		mysql_select_db($db);
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
	<?php
			$user=$_SESSION['id'];//id del usuario
			////// Conexion a la BD //////////////
			$host = "localhost";
			$username = "root";
			$password = "";
			$db = "Examen";
			$conmysql = mysql_connect($host,$username,$password);
			mysql_select_db($db);

		$query="SELECT id, nombre, password, correo  FROM usertbl  WHERE   id='".$user."'";//consulta los datos del alumno
		$resultado = mysql_query($query);	
		while ($row = mysql_fetch_array($resultado))
		{
	?>
</head>
<body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
		<form action="../php/configaccount.php" method="post">
				<div style="position:absolute; left:50px; top:100px;text-align: center; z-index:1; border: solid #fff; background-color: rgba(0,0,0,.2); width: 480px; height: 400px; align-content: center;">
			<h3>Config Account</h3>
			<div style="position:absolute; left:10px; top:62px; z-index:1;">
				<label>Control number</label><br>
				<input style="width: 200px;" type="number" name="id" value="<?php echo $row['id']; ?>">
			</div>
			<div style="position:absolute; left:250px; top:62px; z-index:1;">
				<label>Name</label><br>
				<input style="width: 200px;" type="text" name="name" value="<?php echo $row['nombre']; ?>">
			</div>
			<div style="position:absolute; left:10px; top:120px; z-index:1;">
				<label>E-mail</label><br>
				<input style="width: 260px;" type="email" name="mail" value="<?php echo $row['correo']; ?>">
			</div>

			<div style="position:absolute; left:10px; top:180px; z-index:1;">
				<input class="button" type="submit" name="save" value="Save">
			</div>
			</div>
		</form>
		<form onsubmit="return validar()" action="../php/configpassword.php" method="post">
			<div style="position:absolute; left:700px; top:100px; z-index:1; border: solid #fff; background-color: rgba(0,0,0,.2); width: 350px; height: 400px; align-content: center; text-align: center;;">
			<h3>Password</h3>
			<div>
				<label>Current password</label><br>
				<input style="width: 300px;" type="password" id="pass" name="pass"><br>
				<label>New Password</label><br>
				<input style="width: 300px;" type="password" id="pass1" name="pass1"><br><br>

				<input class="button" type="submit" name="save" value="Save">
			</div>
				</div>
		</form>
</body>
<?php
		}
?>
	<?php 
	include("../footer/Footer.html")//pie de pagina
	 ?>
</html>