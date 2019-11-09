<html>
<head>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/modal.css">
	<link rel="stylesheet" type="text/css" href="../css/cssButtons/select.css">
	<style type="text/css">
		 #myInput {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 60%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #000;
  margin-bottom: 12px;
  position: absolute;
  top: 80px;
  left: 400px;

}

#myTable {
  border-collapse: collapse;
  width:70%;
  border: 1px solid #ddd;
  font-size: 15px;
   position: absolute;
  top: 150px;
  left: 300px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
		.div3{ position:absolute; left:10px; top:60px; z-index:1; }
		.div4{ position:absolute; left:10px; top:250px; z-index:1; }
		form{ background-color: rgba(0, 0, 0, 0.2);}
		#columna1{overflow: auto;width: 255px;height: 300px;}
	</style>
<?php
include ("../header/head_home_alumno.php")
 ?>
</head>
<body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
<?php
    if(!isset($_SESSION)) //Busca que la sesion este iniciada
    { 
        session_start(); //inicia sesion
    }

    ///////// Conexion a la BD ////////////////
	$host="localhost";
	$username = "root";
	$password = "";
	$db ="Examen";
	$conmysql = mysql_connect($host,$username,$password);
	mysql_select_db($db);

	$sql="SELECT id_creacio ,fecha_creacion, mensaje, estado FROM creacion"; //selecciona campos de la tabla creacion
	$result = mysql_query($sql);
?>
	<div class="div3">
		<form method="post" action="../php/busquedaResultados.php">
		<h3>My Results</h3>
			<select name="fech" class="select" style="width:200px;">
				<option value="0">select</option>

	<?php
		$sql3 = "SELECT fecha, estado FROM estado WHERE id_usuario=".$user;//consulta el estado del alumno
		$resul3 = mysql_query($sql3);
			while ($row3 = mysql_fetch_array($resul3)) //recoje el estado del alumno
			{

						echo '<option value="'.$row3['fecha'].'">'.$row3['fecha'].'</option>';//selecciona la fecha del examen pra ver sus resultados
			}
	?>
			</select>
		<input type="submit" name="See" value="See">
		</form>
	</div>

<?php
	echo "<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for date..' title='Type in a date'>";
	echo"<div  id='columna'>";
		echo"<table id='myTable'>";
			echo"<tr>";
				echo"<th> Date </th>";
				echo"<th> Messages </th>";
				echo"<th> Examination status </th>";
				echo"<th> Student status </th>";
				echo"<th></th>";
			echo"</tr>";
											while ($row = mysql_fetch_array($result))		 //almacena en un array el resultado de la consulta
	{
			$fech = $row['fecha_creacion'];
			$user=$_SESSION['id'];
			$sql5="SELECT * FROM estado WHERE id_usuario='".$user."' AND fecha='".$fech."' AND id_exam='".$row['id_creacio']."'";
			$result5=mysql_query($sql5);
			$row5 = mysql_fetch_array($result5);

			$estado1 = "creado";
			$estado2 = "finalizado";
			$estado3 = "Finalizado";
//imprime toda la consulta de los array
			echo"<tr class='tr1'>";
				echo"<td>".$fech."</td>";
				echo"<td>".$row['mensaje']."</td>";
				if ($estado1 == $row['estado']) {
					echo"<td>Created</td>";
				}else
				if ($estado2 == $row['estado']) {
					echo"<td>Finalized</td>";
				}
				if ($estado3 == $row5['estado']) {
					echo"<td>Finalized</td>";
				}else
				if ($estado3 != $row5['estado']) {
					echo"<td>Undone</td>";
				}

				if ($row['estado'] == $estado1) {
					echo"<td><a href='../php/connectExamen.php?fech=".$fech." & user=".$user." & examen=".$row['id_creacio']."'><input type='button' name='Start It' value='Start It'></a></td>";
				}
				if ($row['estado'] == $estado2) {
					echo "<td></td>";
				}
			echo"</tr>";
	}
		echo"</table>";
	echo"</div>";

?>
	<!--/////////////////////////inicio del modal//////////////////////-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        </div>
    </div>
</div>
</body>	
    <footer>
<?php
    include("../footer/Footer.html")//pie de pagina
?>
</footer>
<script>
function myFunction() { //Busqueda de campo input
  var input, filter, table, tr, td, i;//declaracion de variables
  input = document.getElementById("myInput");	//extray el campo input
  filter = input.value.toUpperCase();	//filtra los datos
  table = document.getElementById("myTable");	//selecciona la tabla
  tr = table.getElementsByTagName("tr");	//selecciona la columna para mostrar
  for (i = 0; i < tr.length; i++) {	//Busca dentor del campo
    td = tr[i].getElementsByTagName("td")[0];//columna
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {//identifica la columna para mostrar datos
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</html>