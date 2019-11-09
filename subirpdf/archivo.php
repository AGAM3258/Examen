<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Revision</title>
        <style type="text/css">
            form
            {
                background-color: rgba(0, 0, 0, 0.1);
                width: 300px;
                height: 300px;
                border: solid 2px #000;
            }
        </style>
    </head>
    <body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
        <div style="position:absolute; left:1000px; top:100px; z-index:1;">
            <!--Extray datos almacena en los campos-->
            <form method="post">
                <legend>Review</legend>
                <label><b>File name:</b> <?php echo $_GET['archivo'] ?></label><br>
                <label><b>Student:</b> <?php echo $_GET['user'] ?></label><br>
                <label><b>Control number:</b> <?php echo $_GET['control'] ?></label><br><hr>
                <label>Qualification: </label><br>
                <input type="number" name="calificacion"><br>
                <input type="submit" id="save" name="save" value="Save">
            </form>
        </div>
        <?php
        include 'config.inc.php';   //llama a las funciones
        $db=new Conect_MySql();
            $sql = "select*from tbl_documentos where id_documento=".$_GET['id'];    //selecciona los documentos
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){?>
        <p>NO tiene archivos</p>    <!--Si no hay mensajes muestra este error-->
                <?php }else{ ?>
                <label><h1>PDF and IMG</h1></label>
                <!--Muestra en un iframe los documentos-->
        <iframe style="width: 800px; height: 500px;" src="archivos/<?php echo $datos['nombre_archivo']; ?>"></iframe>
                
                <?php } } ?>
    </body>
    <?php 
        if (isset($_POST['save']))//Busca que se le de clic en save
        {
            //Conexion a la BD
        $host="localhost";
        $username = "root";
        $password = "";
        $db ="Examen";
        $conmysql = mysql_connect($host,$username,$password);
            $calificacion = $_POST['calificacion'];
            $fecha = date("Y-m-d");
            //Extraccion de variables
            $id_user=$_GET['control'];
            $id_pregunta=$_GET['pregunta'];

            $ins='ALTER TABLE result_practica AUTO_INCREMENT = 1';//Busca el ultimo numero
             mysql_select_db($db, $conmysql);
                $result1 = mysql_query($ins);

                    //inserta los datos en la base de datos
                $sentencia='insert into result_practica values (';
                $comilla='"';
                $N='null';
                $coma=',';
                $parentesis=')';
                $insercion = $sentencia .$N. $coma .$comilla .$id_pregunta .$comilla .$coma . $comilla . $id_user .$comilla .$coma . $comilla . $calificacion .$comilla .$coma . $comilla . $fecha .$comilla .$parentesis;
                mysql_select_db($db, $conmysql);
                $result2 = mysql_query($insercion);

                echo "<script>
                alert('The revision of the student has been completed');
                window.location= '../view/home_maestro.php'
                </script>";

        }
    ?>
</html>
