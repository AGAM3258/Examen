<!DOCTYPE html>
<html>
<head>
    <title>Examen Practico</title>
                <?php
                    include ("../header/head_home_alumno.php")
                ?>
    <style type="text/css">
    .div4{ position: absolute;top: 100px;left: 10px; width: 100%; height: 0px;}

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
<?php
    if(!isset($_SESSION)) //Busca sesion
    { 
        session_start();//inicia sesion
        $user=$_SESSION['id'];//llama el numero de control
    }
    //Conexion a la BD
    $host="localhost";
    $username = "root";
    $password = "";
    $db ="Examen";
    $conmysql = mysql_connect($host,$username,$password);
    mysql_select_db($db);

    $sql="SELECT fecha_creacion, mensaje, estado FROM creacion";  //Busca datos del examen creado
    $result = mysql_query($sql);
?>
</head>
<body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
        <form style="position: absolute;top: 100px;left: 400px;" action="Resultado.php?user=$user">
        <input style="width: 600px;" type="submit" class="button" name="Finalize" value="Following"></INPUT>
      </form>
    <div class="div4" id='columna1'>
            <?php
                echo "<table id='myTable'>";
                echo "<tr class='header'>";
                    echo"<th>Date</th>";
                    echo "<th>Exercise</th>";
                    echo"<th>Upload</th>";
                echo "</tr>";

                    $sql4 = "SELECT pregunta, fecha_creacion, id FROM pregunta_extra";//selecciona todas las preguntas extras
                    $resul4 = mysql_query($sql4);
                    while ($row4 = mysql_fetch_array($resul4)) 
                    {
                      //muestras resultados de la consultas
                        $id=$row4['id'];
                echo "<tr>";
                    echo "<td>".$row4['fecha_creacion']."</td>";
                    echo "<td>".$row4['pregunta']."</td>";
                    echo "<td><a href='../subirpdf/index.php?id=".$id." & user=".$user."'><input type='button' name='save' value='Save'></a></td>";
                echo "</tr>";
        }
        echo "</table>";
             ?>
    </div>
</body>
<footer>
<?php
    include("../footer/Footer.html")//pie de pagina
?>
</footer>
</html>