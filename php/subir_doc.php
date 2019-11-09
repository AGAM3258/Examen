<?php
$db = mysql_connect('localhost', 'root', ''); //conexion a la BD
mysql_select_db('Examen', $db);

    //Almacena datos de los documentos dentro de las variables
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;

    $user=$_GET['user'];//Extraccion del usuario
    $pregunta= "1"; //numero de la pregunta
    $titulo= $_POST['titulo'];//titulo del documento
    $descri= $_POST['descripcion'];//decripcion del documento

    ////////////////////Insercion de datos///////////////////////////////////
			$sentencia='insert into creacion values (';
			$comilla='"';
			$N='null';
			$estado='creado';
			$coma=',';
			$parentesis=')';
			$insercion = $sentencia .$N. $coma .$comilla .$pregunta .$comilla .$coma . $comilla .$user .$comilla .$coma .$comilla .$titulo .$comilla .$coma .$comilla .$descri .$comilla .$coma .$comilla .$tamanio .$comilla .$coma .$comilla .$tipo .$comilla .$coma .$comilla .$nombre .$comilla .$parentesis;

			$result = mysql_query($insercion , $db);
			echo $insercion;
			if($result){
            echo "<script>
            alert('has been saved');
            </script>";
            }

?>