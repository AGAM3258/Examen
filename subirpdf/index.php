<!DOCTYPE html>
<?php
include_once 'config.inc.php';//conexion a las configuraciones para archivos
if (isset($_POST['subir'])) {   //Revisa si le han dado clic al boton subir
    //almacena datos de los archivos en variables
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;

    $pregunta=$_GET['id'];
    $user=$_GET['user'];
    $N="null";

    if ($nombre != "") {//pregunta que si el $nombre esta almacenado
        if (copy($ruta, $destino)) {    //busca la ruta del archivo
            $titulo= $_POST['titulo'];//exatrai el titulo mediante la instruccion POST
            $descri= $_POST['descripcion'];//extrai la descripcion mediante la instruccion POST
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(id_documento,id_pregunta,id_user,titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$N','$pregunta','$user','$titulo','$descri','$tamanio','$tipo','$nombre')";//Inserta datos en la tabla de documentos
            $query = $db->execute($sql);
            if($query){
               // echo "Se guardo correctamente";
                echo "<script>
                    alert('The file has been sent');
                    window.location= '../view/Examen_practico.php'
                </script>";
            }
        } else {
            echo "Error";
        }
    }
}
?>

<html>
    <head>
        <?php
include ("../header/head_home_alumno.php")
 ?>
        <meta charset="UTF-8">
        <title>Documents save</title>
        <style type="text/css">
            .button{ background: #f5f5cd;width: 400px;}
            .button:heave{ background: #fff;}
        </style>
    </head>
    <body style="width:100%; background:transparent url(../images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;">
        <div style="width: 500px;position: absolute;left: 440px; top: 150px; margin: auto;border: 1px solid blue;padding: 30px;">
            <h4><b>Subir PDF</b></h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input type="text" name="titulo"></td>
                    </tr>
                    <tr>
                        <td><label>Descripcion</label></td>
                        <td><textarea name="descripcion"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input title="Recomendable PDF" type="file" name="archivo"></td>
                    <tr>
                        <td colspan="2"><input class="button" type="submit" value="Save" name="subir"></td>
                    </tr>
                </table>
            </form>            
        </div>
    </body>
        <footer>
<?php
    include("../footer/Footer.html")
?>
</footer>
</html>
