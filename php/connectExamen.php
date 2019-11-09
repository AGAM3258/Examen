<?php
    if(!isset($_SESSION)) //Busca la sesion iniciada
    { 
        session_start();  //inicia sesion
    }
/////////////// CONEXION A LA BD////////////////////////
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "Examen";
	$conmysql = mysql_connect($host,$username,$password);
	mysql_select_db($db);

	//Extraccion de variables
	$fecha = $_GET['fech'];
	$examen = $_GET['examen'];
	$user= $_SESSION['id'];

		$query1="SELECT id_exam ,id_usuario, estado, fecha FROM estado WHERE fecha='".$fecha."' AND id_usuario='".$user."'"; //Consulta el estado del alumno
		$resultado1 = mysql_query($query1); //Realiza consulta query
		while ($row1 = mysql_fetch_array($resultado1)) 	//Almacena en un array todos los datos consultados
		{
			//declara variales de los datos encontrados
						$estado4 = $row1['estado'];
						$estado6 = $row1['id_exam'];
						$estado5 = "Finalizado";
						$fec = $row1['fecha'];

						if ($estado4 == $estado5 && $examen == $estado6) //revisa si el usuario a finalizado el examen
						{
							echo "<script>
			                alert('This user has finished the test');
			                window.location= '../view/home_alumno.php?user=$user'
			    			</script>";
						}
		}
	$query="SELECT estado FROM creacion WHERE fecha_creacion = '".$fecha."' AND id_creacio='".$examen."'";	//Busca el examen
	$resultado = mysql_query($query);	
	while ($row = mysql_fetch_array($resultado))
	{
		//Extray array y almacena en variables
		$estado = $row['estado'];
		$estado2 = "creado";
		$estado3 = "finalizado";

		if ($estado == $estado3) //revisa si el examen lo finalizo el MAESTRO
		{
			echo "<script>
		    alert('Alert the finished exam');
		    window.location= '../view/home_alumno.php?user=$user'
		    </script>";
		}else
		
			if ($estado == $estado2) //revisa que este creado el examen 
			{
							//redirecciona direccto al examen
				echo "<script>
	            alert('You are about to start the test');
	            window.location= '../view/Examen.php?fecha=$fecha & examen=$examen'
	    		</script>";
			}
			
				//alerta si ya lo termino no volvera poderlo hace
	}
	
?>