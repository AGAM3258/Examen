<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Canalization</title>
	<?php
		include ("../header/head_home_maestro.php")
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
<body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
        $user = $_SESSION['id'];
    }
		//conexion a la base de datos 
		$host = "localhost";
		$username = "root";
		$password = "";
		$db = "Examen";
		$conmysql = mysql_connect($host,$username,$password);
		mysql_select_db($db);

			echo"<div>";
				echo "<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for name..' title='Type in a name'><br><br><br><br>";
				echo"<table style='border: solid 2px #000; text-align: center;' id='myTable'>";
					echo"<tr>";
						echo"<th colspan='4' style='text-align: center;'> <b>Canalization</b> </th>";
					echo"</tr>";
					echo"<tr>";
						echo"<th style='text-align: center;'><b>Student</b></th>";
						echo"<th style='text-align: center;'><b>Control number</b></th>";
						echo"<th style='text-align: center;'><b>Mail</b></th>";
						echo"<th style='text-align: center;'><b>Matter</b></th>";
					echo"</tr>";
			$query = "SELECT * FROM canalizados WHERE id_maestro=".$user;//consulta lista de alumnos canalizados
			$result = mysql_query($query);
			while($row = mysql_fetch_array($result))
			{
				$query1 = "SELECT * FROM usertbl WHERE id=".$row['id_alumno'];//consulta el alumno mediante el id de calizados
				$result1 = mysql_query($query1);
				while($row1 = mysql_fetch_array($result1))
				{
					$query2 = "SELECT * FROM materias WHERE id_ma='".$row['id_materia']."'";//consulta la materia mediante el id de canalizados
					$result2 = mysql_query($query2);
					while ($row2 = mysql_fetch_array($result2))
					{
						//imprime resutado
						echo"<tr>";
							echo "<td>".$row1['nombre']."</td>";
							echo "<td>".$row1['id']."</td>";
							echo "<td>".$row1['correo']."</td>";
							echo "<td>".$row2['materia']."</td>";
						echo "</tr>";
					}
				}
			}
?>
</body>
    <footer>
<?php
    include("../footer/Footer.html")
?>
</footer>
<script>
function myFunction() {	//llama a la funcion al ingresar elgun dato al input de busqueda
  var input, filter, table, tr, td, i;	//declaracion de variables por parte de la tabla
  input = document.getElementById("myInput");	//extray el valor del input
  filter = input.value.toUpperCase();	//estray el filtro
  table = document.getElementById("myTable");	//extray el valor de la tabla
  tr = table.getElementsByTagName("tr");	//extray datos del tr de la tabla
  for (i = 0; i < tr.length; i++) {	//busca el paresido
    td = tr[i].getElementsByTagName("td")[0];//busca datos en la columna
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";	//muestra los datos
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</html>