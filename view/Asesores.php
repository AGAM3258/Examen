<!DOCTYPE html>
<html>
<head>
	<title>Advisors List</title>
		        <?php
include ("../header/head_home_alumno.php")//cabecero de alumno
 ?>
	<style type="text/css">
		 #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 80%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #000;
  margin-bottom: 12px;
  position: absolute;
  top: 100px;
  left: 100px;

}

#myTable {
  border-collapse: collapse;
  width: 90%;
  border: 1px solid #ddd;
  font-size: 18px;
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
       table {font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif; border-bottom: 1px solid #fff;margin: 45px;width: 500px;text-align: left;border-collapse: collapse; }
        th {font-size: 16px; font-size: 15px; }
        td {padding: 8px;font-size: 15px;}

		.button{   width: 150px;text-decoration: none;font-weight: 600;font-size: 15px;color: #ffffff;background-color: #FF7F50;border-radius: 5px;border: 2px solid #000; }
		.button:hover{ background: #ffffff;color: #000; }
	</style>
	</head>
<body  style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
	<?php
	//conexion a la base de datos y al usuario
		$host="localhost";
		$username = "root";
		$password = "";
		$db ="Examen";
		$conmysql = mysql_connect($host,$username,$password);
		mysql_select_db($db);

			$query="SELECT id_user, id_materia FROM mat_maestros";
				$resultado = mysql_query($query);	//consulta a los usuarios tipo MAESTROS buscados

					echo"<div>";
					echo "<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for name..' title='Type in a name'><br><br><br><br>";
						echo"<table style='border: solid 2px #000; text-align: center;' id='myTable'>";
						echo"<tr>";
							echo"<th colspan='4' style='text-align: center;'> <b>Assesors</b> </th>";
						echo"</tr>";
						echo"<tr>";
							echo"<th style='text-align: center;'><b>Teacher</b></th>";
							echo"<th style='text-align: center;'><b>Subjects</b></th>";
							echo"<th style='text-align: center;'><b>Mail</b></th>";
							echo"<th style='text-align: center;'><b>Send request</b></th>";
						echo"</tr>";

					while ($row1 = mysql_fetch_array($resultado))		 //almacena en un array el resultado de la consulta
					{
						$id=$row1['id_user'];
						$id_mat=$row1['id_materia'];
						echo"<tr>";

						$query2="SELECT nombre, correo FROM usertbl WHERE id=".$id;
							$resultado2 = mysql_query($query2);
								while ($row2 = mysql_fetch_array($resultado2)) 
								{
									$query3="SELECT materia FROM materias WHERE id_ma=".$id_mat;	//consulta las materias
										$resultado3 = mysql_query($query3);
											while ($row3 = mysql_fetch_array($resultado3))	//almacena las materias en un arreglo
											{
												//muestra el resultado de la consulta en formato de tabla
												echo "<td>".$row2['nombre']."</td>";
												echo "<td>".$row3['materia']."</td>";
												echo "<td>".$row2['correo']."</td>";
												echo "<td><a href='../php/canalizaUser.php?idmaestro=".$id." & idmateria=".$id_mat."'><input class='button' type='submit' name='enviar' value='Send'></a></td>\n";
											}
								}
					}
			echo "</tr>";
		echo "</table>";
	echo "</div>";
	?>
</body>
    <footer>
<?php
    include("../footer/Footer.html")
?>
</footer>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</html>