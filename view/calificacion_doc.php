<!DOCTYPE html>
<html>
<head>
	<title></title>
	        <?php
include ("../header/head_home_alumno.php")
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
       table {font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif; border-bottom: 1px solid #fff;margin: 45px;width: 500px;text-align: center;border-collapse: collapse; }
        th {font-size: 16px; font-size: 15px;;}
        td {padding: 8px;font-size: 15px;}
	</style>
</head>
<body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
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

	$sql="SELECT * FROM result_practica WHERE id_user='".$user."'";
	$result = mysql_query($sql);

		echo"<div class='div2'>";
		echo "<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for Date..' title='Type in a date'><br><br><br><br>";
		echo"<table  style='border: solid 2px #000; text-align: center;' id='myTable'>";
			echo"<tr class='header'>";
				echo"<th>Date</th>";
				echo"<th>Control number</th>";
				echo"<th>Question</th>";
				echo"<th>Qualification</th>";
			echo"</tr>";
			while ($row = mysql_fetch_array($result))
			{
				$sql1= "SELECT * FROM pregunta_extra WHERE id='".$row['id_pregunta']."'"; //consulta la pregunta creada por el maestro
				$result1 = mysql_query($sql1);
				while ($row1 = mysql_fetch_array($result1)) //almacena la pregunta en un arreglo
				{
          //muestra el resultado de los arreglos
					echo"<tr class='tr1'>";
						echo"<td class='td1'>".$row1['fecha_creacion']."</td>";
						echo"<td class='td1'>".$user."</td>";
						echo"<td class='td1'>".$row1['pregunta']."</td>";
						echo"<td class='td1'>".$row['calificacion']."</td>";
					echo"</tr>";
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
function myFunction() { //llama la funcion despues de ingresar un dato en el campo de busqueda
  var input, filter, table, tr, td, i;  //declaracion de las variable a mostrar en la tabla
  input = document.getElementById("myInput"); //llama el dato ingresado en el campo de busqueda
  filter = input.value.toUpperCase(); //convierte los caracteres alfabeticos de una cadena de caracteres en mayusculas y las almacena
  table = document.getElementById("myTable");//llama los campos de la tabla
  tr = table.getElementsByTagName("tr");  //llama a los datos de los campos
  for (i = 0; i < tr.length; i++) { //Busca la letra o texto ingresado
    td = tr[i].getElementsByTagName("td")[0]; //Busca en el campo especificado la cadena de caracteres ingresado en le input
    if (td) {//si ahi un caracter entra a la siguiente face
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {//muestra los capos qeue tenga tal cadena
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";//si no encuentra nada en la cadena no te muestra nada
      }
    }       
  }
}
</script>
</html>