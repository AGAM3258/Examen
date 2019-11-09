<html>
    <head>
        <meta charset="UTF-8">
        <title>Archivos</title>
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
  top: 70px;
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
        table {font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif; border-bottom: 1px solid #fff;margin: 45px;width: 500px;text-align: left;border-collapse: collapse; }
        th {font-size: 16px; font-size: 15px;font-weight: normal;padding: 8px;background: #b9c9fe;border-top: 4px solid #aabcfe;border-bottom: 1px solid #fff; color: #000; }
        td {padding: 8px;font-size: 15px;background: #e8edff;border-bottom: 1px solid #fff; color: #669;border-top: 1px solid transparent; }
        tr:hover td { background: #d0dafd; color: #339; }
        </style>
        <?php
include ("../header/head_home_maestro.php")//llama el cabezero del sistema
 ?>
    </head>
    <body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
        <div>
            <br><br>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for control number.." title="Type in a name">
        <table style="border: solid 2px #000; text-align: center;" id="myTable">
            <tr>
                <th style="border: solid 2px #000;">Student</th>
                <th style="border: solid 2px #000;">Control number</th>
                <th style="border: solid 2px #000;">Exercise</th>
                <th style="border: solid 2px #000;">File</th>
            </tr>
            <?php 
            ///////////Conexion a la BD
                $host="localhost";
                $username = "root";
                $password = "";
                $db ="Examen";
                $conmysql = mysql_connect($host,$username,$password);
                mysql_select_db($db);
                $num=0;//Contador

                $sql="SELECT id_user, id_pregunta, id_documento, nombre_archivo FROM tbl_documentos";//selecciona los documentos para mostrarlos en una lizasta
                $result=mysql_query($sql);
                while ($row = mysql_fetch_array($result)) 
                {

                    $sql1="SELECT id, nombre FROM usertbl WHERE id='".$row['id_user']."'";//selecciona al todos los documnetos que tengan el mismo numero de control
                    $result1=mysql_query($sql1);
                    while ($row1 = mysql_fetch_array($result1)) 
                    {
                            $sql3="SELECT * FROM pregunta_extra WHERE id='".$row['id_pregunta']."'";//selecciona las preguntas con el mismo id
                            $result3=mysql_query($sql3);
                            while ($row3 = mysql_fetch_array($result3)) 
                            {
                           ?> 
                           <!--Muestra resultado de las consultas-->
                           <tr>
                                <td style="border: solid 2px #000;"><?php echo $row1['nombre']; ?></td>
                                <td style="border: solid 2px #000;"><?php echo $row1['id']; ?></td>
                                <td style="border: solid 2px #000;"><?php echo $row3['pregunta']; ?></td>
                                <td style="border: solid 2px #000;"><a href="../subirpdf/archivo.php?id=<?php echo $row['id_documento']?>&control=<?php echo $row1['id']?>&user=<?php echo $row1['nombre']?>&pregunta=<?php echo $row['id_pregunta']?>&archivo=<?php echo $row['nombre_archivo']?>"><?php echo $row['nombre_archivo']; ?></a></td>
                            </tr>
                            <?php
                            }
                    } 
                }
            ?>
        </table>
    </div>
    </body>
    <footer>
<?php
    include("../footer/Footer.html") //pie de pagina
?>
</footer>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</html>