<?php
$db = mysql_connect('localhost', 'root', '');
mysql_select_db('Examen', $db);

	$materia=$_POST['mat'];
	$pregunta=$_POST['pre'];
	$correcta=$_POST['cor'];
	$incorrecta1=$_POST['inc1'];
	$incorrecta2=$_POST['inc2'];
	$incorrecta3=$_POST['inc3'];

	$ins='ALTER TABLE preguntas AUTO_INCREMENT = 1';
	$result2 = mysql_query($ins , $db);


	$sentencia='insert into preguntas values (';
	$comilla='"';
	$N='null';
	$estado='creado';
	$coma=',';
	$parentesis=')';
	$insercion = $sentencia .$N. $coma .$comilla .$materia .$comilla .$coma . $comilla .$pregunta .$comilla .$coma .$comilla .$correcta .$comilla .$coma .$comilla .$incorrecta1 .$comilla .$coma .$comilla .$incorrecta2 .$comilla .$coma .$comilla .$incorrecta3 .$comilla .$parentesis;

	$result = mysql_query($insercion , $db);

	header("Location:register.php");

	?>