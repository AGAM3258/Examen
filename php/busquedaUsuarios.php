
	<style type="text/css">
		td, th{text-align: center;}
	</style>
						<table>
						<tr>
							<th colspan="5">Students</th>
						</tr>
						<tr>
							<th>Name</th>
							<th>State</th>
							<th>Grades</th>
							<th>Number of right answers</th>
							<th>Number of incorrect</th>
						</tr>
<?php
/////////// Conexion a la BD //////////////////////////////
    $host="localhost";
	$username = "root";
	$password = "";
	$db ="Examen";
	$conmysql = mysql_connect($host,$username,$password);
	mysql_select_db($db); 

	$fecha = $_POST['ExamFecha'];//recupera fecha
	$TypUser = "Alumno";//recupera el tipo de usuario


	$sql="SELECT id FROM usertbl WHERE tipo_user='".$TypUser."'";	//busca el tipo de usuario
	$result=mysql_query($sql);	//llama la funcion mysql
	while ($row=mysql_fetch_array($result))	// recupera el resultado y almacena en un arreglo
	{
		$Alum = $row['id'];	//recupera el id y almacena en una variable
		//Rializa otra consulta
		$sql1="SELECT id_corin, id_usuario, estado, calificasion, correctas, incorrectas FROM estado WHERE id_usuario='".$Alum."' AND fecha='".$fecha."'";
		$result1=mysql_query($sql1);	//llama la funcion mysql
		//en proceso
			if ($result1==0) {	//busca si ahi algo para mostrar
				echo "<h1>No hay nada a mostrar</h1>";
				break;	//cierra el proceso
			}
		while ($row1=mysql_fetch_array($result1))	//almacena consulta
		{
			$Alum1 = $row1['id_usuario'];	//almacena valor del row1 en una variable
			$sql2="SELECT nombre FROM usertbl WHERE id='".$Alum1."'";	//consulta a alumnos que han finalizado el examen
			$result2=mysql_query($sql2);	//llama funcion mysql
			while ($row2=mysql_fetch_array($result2)) //almacena consulta en una array
			{
				?>
				<?php
				////////////////// Muestra resultados //////////////////////////////////
					echo "<tr>";
						echo "<td>".$row2['nombre']."</td>";
						echo "<td>".$row1['estado']."</td>";
						echo "<td>".$row1['calificasion']."</td>";
						echo "<td>".$row1['correctas']."</td>";
						echo "<td>".$row1['incorrectas']."</td>";
					echo "</tr>";
			}
		}
	}
?>