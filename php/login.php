<?php
	include_once '../php/connection.php'; //conexion a la bd

	if(!empty($_POST['username']) && !empty($_POST['password'])){//compara que si se allan resivido los datos
			$username=$_POST['username'];//almacena el numero de control del INPUT
			$password=$_POST['password'];//almacena la contraseña del INPUT

		$query=mysqli_query($mysqli, "SELECT * FROM usertbl WHERE id='".$username."'AND password='".$password."'"); //seleciona al usuario

		$numerows = mysqli_num_rows($query); //almacena la consulta query
			if ($numerows!=0)	//busca que si haya datos en el arreglo
			{
				while ($row=mysqli_fetch_assoc($query)){ //almacena datos del usuario en una array
					$tipo_usu=$row['tipo_user'];
					$dbusuario=$row['id'];
					$dbpassword=$row['password'];
					$usu_id=$row['id'];
					$nombre=$row['nombre'];
				}

				if($username == $dbusuario && $password == $dbpassword){ //Compar los datos extraidos de la BD con los ingresados en los INPUT
					session_start();//inicia la sesion y almacena los datos en variables SESSION
					$_SESSION['id']=$dbusuario;
					$_SESSION['id']=$usu_id;
					$_SESSION['tipo_user']=$tipo_usu;
					$_SESSION['nombre']=$nombre;

					if ($tipo_usu == "Alumno") //Busca si es tipo Alumno
					{
						header("Location:../view/home_alumno.php?user=".$usu_id);
					}

					if ($tipo_usu == "Maestro")//Busca si es tipo Maestro
					{
						header("Location:../view/home_maestro.php?user=".$usu_id);
					}
				}
							//Linea de todos los else
					else
					{
						echo "<script> alert('Incorrect username or password.');windows.location.href=\"../index.html\"<script>";//Contraseña o usuario incorrecto
					}
				}
					else
					{
							echo "<script> alert('Incorrect username or password.');windows.location.href=\"../index.html\"<script>";//Contraseña o usuario incorrecto
					}
				}
					else
					{
							echo "<script> alert('Make sure you fill in all the fields');windows.location.href=\"../index.html\"<script>";//Alerta en caso de que el alumno no este registrado
					}
							//termino de los else

?>