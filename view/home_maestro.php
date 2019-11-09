<html>
<head>
<meta charset="utf-8">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/modal.css">
	<link rel="stylesheet" type="text/css" href="../css/stylemaster.css">
	<link rel="stylesheet" type="text/css" href="../css/cssButtons/select.css">
	<style type="text/css">
		.but{background: #5858FF; border: 1px solid #5858FF; color: white;}
		.but:hover{background: #fff; color: black; border:1px solid #5858FF;}
	</style>
<?php
include ("../header/head_home_maestro.php") 
 ?>
</head>
<body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
	<?php 
	if(!isset($_SESSION)) //Busca que este iniciada una sesion
    { 
        session_start(); //inicia la sesion
    }
////////////// Conexion a la BD //////////////////////////////////////////////
    $host="localhost";
	$username = "root";
	$password = "";
	$db ="Examen";
	$conmysql = mysql_connect($host,$username,$password);
	mysql_select_db($db);

	$user=$_SESSION['id'];

	 ?>
	<div  class="div1">
		<form action="../php/crear_exam.php" style=" background-color: rgba(0, 0, 0, 0.1);text-align: center;">
			<h3>Create Exam</h3>
			<br>
			<input name="create" style="width: 150px;" class="but" type="submit" value="Create"></input>
		</form>
			<form action="../php/finalice_Exam.php" method="post" style=" background-color: rgba(0, 0, 0, 0.1);text-align: center;">
				<h3>Finalice exam</h3>
							<select name="ExamFecha" id="ExamFecha"  class="select" style="width:200px;">
				<option value="0">Select</option>
				<?php
						//Busca la fecha de todos los examenes 
					$sql3 = "SELECT fecha_creacion FROM creacion WHERE id_user=".$user;//Busca el examen
					$resul3 = mysql_query($sql3);
					while ($row3 = mysql_fetch_array($resul3)) 
					{
						echo '<option value="'.$row3['fecha_creacion'].'">'.$row3['fecha_creacion'].'</option>';	//muestra el resultado del arreglo en un lista
					}
				?>
			</select><br><br>
				<input type="submit" style="width: 150px;" class="but" name="finalice" value="Finalice"><!--Boton para finalizar examen-->
			</form>

		<form method="post" style=" background-color: rgba(0, 0, 0, 0.1); text-align: center;">
			<h3>Student Results</h3>
			<select name="ExamFecha" id="ExamFecha" onChange="submit()"  class="select" style="width:200px;">
				<option value="0">Select</option>
				<?php
						//Busca la fecha de todos los examenes 
					$sql3 = "SELECT fecha_creacion FROM creacion WHERE id_user=".$user; //Selecciona el examen para imprimir los resultados de los alumnos
					$resul3 = mysql_query($sql3);
					while ($row3 = mysql_fetch_array($resul3)) 
					{
						echo '<option value="'.$row3['fecha_creacion'].'">'.$row3['fecha_creacion'].'</option>';	//muestra el resultado del arreglo en un lista
					}
				?>
			</select>
			<br>
			<br>
		</form>

	</div>
	<div class="div2">
				<?php 
			if (isset($_POST['ExamFecha']))
	{
		include ('../php/busquedaUsuarios.php');//Al oprimir el boton Finalize llama a las operaciones del examen
	}
		 ?>
	</div>
	<div  class="div3">
	</div>

<!--/////////////////////////inicio del modal//////////////////////-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        </div>
    </div>
</div>
<!--/////////////////////////inicio del modal 2//////////////////////-->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        </div>
    </div>
</div>

</body>	
<footer>
<?php
	include("../footer/Footer.html")
?>
</footer>
</html>