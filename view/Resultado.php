<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultados</title>
	<?php
include ("../header/head_home_alumno.php")
 ?>
</head>
	<link rel="stylesheet" type="text/css" href="../css/styleResultado.css">
	<script type="text/javascript" src="../js/graphic.js"></script>
<?php 
	
?>
<body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">

<!--//////////////////////////////////////////////////////PHP///////////////////////////////////////////////////////////////////////-->
<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
        $user = $_SESSION['id'];
    }

	$host="localhost";
	$username = "root";
	$password = "";
	$db ="Examen";
	$conmysql = mysql_connect($host,$username,$password);

	mysql_select_db($db);
		

	$query="SELECT nombre FROM usertbl WHERE id=".$user; //mediante el numero de control busca el nombre del usuario
	$resultado = mysql_query($query);					 //consulta el usuario buscado
	while ($row1 = mysql_fetch_array($resultado))		 //almacena en un array el resultado de la consulta
	{
			//mediante el numero de control busca los campos a mostrar del examen
	$query2="SELECT id_corin, id_usuario, correctas, incorrectas, estado, calificasion, dictamen  FROM estado  WHERE   id_usuario=".$user;
	$resultado2 = mysql_query($query2);		//consulta los datos buscados
	while ($row = mysql_fetch_array($resultado2))		//almacena el resultado de la consulta en un array
	{
		$pre=$row['correctas']+$row['incorrectas'];
?>
<!--//////////////////////////////////////////////////////Script///////////////////////////////////////////////////////////////////////-->
		<!--Script de la grafica-->
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Correct',     <?php echo $row['correctas']; ?>],
          ['Incorrect',    <?php echo $row['incorrectas']; ?>]
        ]);

        var options = {
          title: 'GRAPH OF RESULTS',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- Muestra el resultado de las consultas de los array  y los muestra en tablas -->
		<div class="div1">
			<label><h3>Evaluation result</h3></label>
		</div>
		<div class="div6" id="piechart_3d">
			</div>
			<div class="div2">
			<table>
				<tr>
				<th colspan="2">Student data</th>
				</tr>
				<tr>
					<th>Control number</th>
					<th>Name</th>
				</tr>
				<tr>
					<td><?php echo $user; ?></td>
					<td><?php echo $_SESSION['nombre']; ?></td>
				</tr>
			</table>
		</div>
		<br>
		<div class="div3">
			<table>
				<tr>
					<th colspan="2">Qualification</th>
				</tr>
				<tr>
					<td colspan="2"><?php echo $row['calificasion']; ?></td>
				</tr>
			</table>
		</div>
		<br>
		<div class="div4">
				<table>
				<tr>
					<th colspan="2">Opinion</th>
				</tr>
				<tr>
					<td colspan="2"><?php echo $row['dictamen']; ?></td>
				</tr>
			</table>
		</div>
		<br>
		<div class="div5">
			<table>
				<tr>
					<th colspan="2">Results</th>
				</tr>
				<tr>
					<th>Correct</th>
					<th>Incorrect</th>
				</tr>
				<tr>
					<td><?php echo $row['correctas']; ?><b>/</b><?php echo $pre; ?></td>
					<td><?php echo $row['incorrectas']; ?><b>/</b><?php echo $pre; ?></td>
				</tr>
			</table>
		</div>
<?php
	}//termino del row1
	}//termino del row
 ?>
</body>
<?php 
include("../footer/Footer.html")
 ?>

</html>