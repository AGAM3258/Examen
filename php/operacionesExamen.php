<?php
            if(!isset($_SESSION)) //Busqueda de sesion
    { 
        session_start(); //inicia sesion
        $user = $_SESSION['id'];//exatray la variable sesion
    }
    //Conexion a la BD
	$host="localhost";
	$username = "root";
	$password = "";
	$db ="Examen";
	$conmysql = mysql_connect($host,$username,$password);	//conexion a la BD
		mysql_select_db($db);
		//DEclaracion de variables
		$correctas=0;
		$preguntas=1;
		$incorrectas=0;
		$query2 ="SELECT * FROM preguntas";	//busca todas las preguntas
		$resultado2=mysql_query($query2);//utiliza el metodo query
		$row = mysql_num_rows($resultado2);//almacena en un row
			for ($a=1; $a <=$row ; $a++)	//hace un ciclo asta terminar de lanzar todas las preguntas
			{
				$query2="SELECT id_materia, id, correcta, incorrecta3  FROM preguntas  WHERE   id=".$a;//busca por id las preguntas utilizando un contador
				$resultado2 = mysql_query($query2);//consulta query
				$array2[$preguntas]=mysql_result($resultado2,0,'correcta'); //almacena la respuesta correcta de la pregunta
				$preguntas++;

			}
			for ($ins=1; $ins <= $row; $ins++) //nuevo contador de preguntas para la extraccion de radio buttons
			{
				$array4[$ins] = $_POST['opcion'.$ins];///extraccion del valor del radio button
				
			}
			//Compara las respuestas con las correctas
			for ($a2=1; $a2 <= $row ; $a2++) 
			{
				for ($verif=1; $verif <= $row ; $verif++)
				{

					if ($array2[$a2] == $array4[$verif])	//comparacion de opciones
					{
						$correctas++;
					}
				}
			}
////////////////////OPERACIONES///////////////////////////////
			$incorrectas=$row-$correctas; //Extray respuestas incorrectas
			$cal=floor(($correctas/101)*100); //Resuelve calificacion

			$fecha = date("Y-m-d");//fecha
			$examen = $_GET['examen'];//id del examen creado
			
			date_default_timezone_set('UTC');//zona
			date_default_timezone_set("America/Mexico_City");//zona de la ciudad
			setlocale(LC_TIME, 'spanish');//idioma de la hora y fecha
			$hora = strftime("%I:%M");//hora

			if ($cal > 80) {	//dictamen por calificacion
				$Dictamen="Aprobado";
			}else
			if ($cal < 80) { //dictamen por calificacion
				$Dictamen="Reprobado";
			}

//////////////////////BUSCAR EL ULTIMO ID  DE LA TABLA ESTADO Y INCREMENTAR DESDE AHI///////////////////////////////////////////

			$incremento='ALTER TABLE estado AUTO_INCREMENT = 1'; //inicia desde el ultimo numero la numeracion
			mysql_select_db($db, $conmysql);
			$result2 = mysql_query($incremento);

//////////////////////INSERCION DE DATOS EN LA BD///////////////////////////////////////////
			
			$estado='Finalizado';
			$sentencia='insert into estado values (';
			$N ='Null';
			$comilla='"';
			$coma=',';
			$parentesis=')';
			$insercion = $sentencia .$N .$coma . $comilla . $user .$comilla .$coma . $comilla . $examen .$comilla .$coma .$comilla .$correctas .$comilla .$coma .$comilla .$incorrectas .$comilla .$coma . $comilla . $estado .$comilla  .$coma . $comilla . $cal .$comilla  .$coma . $comilla . $Dictamen .$comilla .$coma . $comilla . $fecha .$comilla .$coma . $comilla . $hora .$comilla .$parentesis;

			mysql_select_db($db, $conmysql);
			$result = mysql_query($insercion);

			$query7 = "SELECT * FROM estado WHERE id_exam=".$examen;
			$result7 = mysql_query($query7);
			while ($row7 = mysql_fetch_array($result7)) 
			{
				 $idExamen=$row7['id_corin'];
			}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		foreach ($rango as $a1) //Busca un rango de preguntas
		{

			$n=$n+1;	//suma de uno en uno para mostrar preguntas
		 	$array0[$n]  = $_POST['ar'.$n];	//almacena el id de la pregunta
		 	$array4[$n] = $_POST['opcion'.$n];//almacena la respuesta del usuario

		   	$ins='ALTER TABLE mis_respuestas AUTO_INCREMENT = 1';	//empieza la numeracion desde el ultimo numero tomado
			mysql_select_db($db, $conmysql);
			$result = mysql_query($ins);
			//inserta los datos en la BD
			$insercion = "INSERT INTO mis_respuestas(id_res,id_user,id_pregunta,respuestas,numero_examen,id_corin) VALUES('$N','$user','$array0[$n]','$array4[$n]', '$examen', '$idExamen')";
			mysql_select_db($db, $conmysql);
			$result2 = mysql_query($insercion);
		}
		 	//redirecciona
			echo "<script>
		    alert('you have already finished the multiple choice exam, the following will be practical');
		    window.location= 'Examen_practico.php?user=$user'
		    </script>";
?>