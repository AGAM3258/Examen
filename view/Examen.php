<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/styleExamen.css">
<head>
	<title>Exam</title>
</head>
<body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
<!--empiezo del php-->
<?php
    if(!isset($_SESSION)) //Busca la sesion
    { 
        session_start(); //inicia la sesion
        $user = $_SESSION['id'];//numero de control de la sesion
    }
	$host="localhost";
	$username = "root";
	$password = "";
	$db ="Examen";
	$conmysql = mysql_connect($host,$username,$password);	//conexion a la BD
	$examen = $_GET['examen'];
?>
	<br>
	<form method="post">
	<br><br>
<?php  
	mysql_select_db($db);
		//primera consulta
			$query ="SELECT * FROM preguntas";
			$resultado=mysql_query($query);
			$row = mysql_num_rows($resultado);		//almacena primera consulta en el array
		//segunda consulta
			$query2 ="SELECT * FROM preguntas";
			$resultado2=mysql_query($query2);
			$row2 = mysql_num_rows($resultado2);	//almacena segunda consulta en el array


				$row3 = mysql_num_rows($resultado);//tamaño de la tabla
				$arry=0;//Declaracion del arreglo en 0
				$num=0;//Numeracion pra las preguntas
				$rango = range(1, $row3);//tamaño de la tabla
				shuffle($rango);//muestra las preguntas y respuestas aleatorias


				
				foreach ( $rango as $a1 )		//muestra el rango de las preguntas
								{
									$num++;
									$query = "SELECT id, pregunta, correcta, incorrecta1, incorrecta2, incorrecta3  FROM preguntas  WHERE id=".$a1;//cuenta comprando el id de la pregunta
									$resultado = mysql_query($query);
									echo '<div> <label style=" font-size:18px; font-family:Bookman Old Style;"><b>'.mysql_result($resultado,0,'pregunta')."</b> </div> ";

									echo'<input type="hidden" name="ar'.$num.'" value="'.$a1.'">';

									//ordenamiento de la impresion
									echo "<br>";
									
									$rango1 = range(0, 3);// rango de respuestas
									shuffle($rango1);//numeros de las respuestas

									foreach ($rango1 as $sln)	//muestra las respuestas de las preguntas
										{

														         ///muestra todas las opciones de la pregunta seleccionada
											$respuesta[0]=$opcion=mysql_result($resultado,0,'correcta');
											$respuesta[1]=mysql_result($resultado,0,'incorrecta1');
											$respuesta[2]=mysql_result($resultado,0,'incorrecta2');
											$respuesta[3]=mysql_result($resultado,0,'incorrecta3');
											echo '<div> <input type="radio" required   checked="cheked" name="opcion'.$num.'" value="'.$respuesta[$sln].'"> <label style=" font-size:18px;">'.$respuesta[$sln].'<br> </div>';
											echo "<br>";
										}
										echo "<hr>";
								}

?>

<input type="submit" class="button" name="Finalize" value="Following"></INPUT>
</form>
<?php  
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "Examen";
	$conmysql = mysql_connect($host,$username,$password);
	mysql_select_db($db);
	 $N="null";
	 $n=0;

	if (isset($_POST['Finalize']))
	{

		require_once '../php/operacionesExamen.php';//Al oprimir el boton Finalize llama a las operaciones del examen
	}
?>
</body>
</html>