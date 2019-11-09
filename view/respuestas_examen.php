<!DOCTYPE html>
<?php 
		if(!isset($_SESSION)) 
    { 
        session_start(); 
        $user = $_SESSION['id'];
    }
?>
<html>
<head>
	                <?php
                    include ("../header/head_home_alumno.php")
                ?>
	<title>My Results</title>
	<style type="text/css">
		#myTable {
  align-content: center;
  border-collapse: collapse;
  width:90%;
  border: 1px solid #ddd;
  font-size: 15px;
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
	<table id='myTable'>
		<tr class='header'>
			<th>Question</th>
			<th>you answer</th>
			<th>Correct answer</th>
		</tr>
	<?php 

		$host="localhost";
		$username = "root";
		$password = "";
		$db ="Examen";
		$conmysql = mysql_connect($host,$username,$password);
		$exam = $_GET['exam'];

		mysql_select_db($db);
			$query = "SELECT * FROM estado WHERE id_usuario='".$user."' AND id_exam='".$exam."'";
			$result = mysql_query($query);
			while ($row = mysql_fetch_array($result))
			{
				$query1 = "SELECT * FROM mis_respuestas WHERE id_corin='".$row['id_corin']."' AND numero_examen='".$row['id_exam']."'";
				$result1 = mysql_query($query1);
				while ($row1 = mysql_fetch_array($result1))
				{
					$query2 = "SELECT * FROM preguntas WHERE id=".$row1['id_pregunta'];
					$result2 = mysql_query($query2);
					while ($row2 = mysql_fetch_array($result2))
					{
						echo "<tr>";
							echo "<td>".$row2['pregunta']."</td>";
							echo "<td>".$row1['respuestas']."</td>";
							echo "<td>".$row2['correcta']."</td>";
						echo "</tr>";
					}
				}
			}

	?>
</body>
<?php
    include("../footer/Footer.html")
?>
</html>