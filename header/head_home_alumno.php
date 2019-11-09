<html>
<head>
	<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
		$user=$_SESSION['id'];
		$name=$_SESSION['nombre'];
	?>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/js" href="../js/bootstrap.min.js">
			<style type="text/css">
		.table1 {font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;font-size: 14px; border-bottom: 1px solid #fff;margin: 45px;width: 700px;text-align: left;border-collapse: collapse; }
		th {font-size: 16px;font-weight: normal;padding: 8px;background: #b9c9fe;border-top: 4px solid #aabcfe;border-bottom: 1px solid #fff; color: #000; }
		td {padding: 8px;background: #e8edff;border-bottom: 1px solid #fff; color: #669;border-top: 1px solid transparent; }
		tr:hover td { background: #d0dafd; color: #339; }
		form{ background-color: rgba(0, 0, 0, 0.2); }
	</style>

</head>
<body>

		<nav class="nav navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand"><img style="width: 66px;" src="../images/logos/logo_login.png"></a>
					<a class="navbar-brand" href="../view/home_alumno.php?user=".$user> Student </a>
				</div>
			<ul class="nav navbar-nav">
				<li><a class="navbar-brand" href="../view/home_alumno.php?user=".$user> Home </a></li>
				<li><a class="navbar-brand" href="configAccount.php"> Account configuration </a></li>
				<li><a class="navbar-brand" href="Asesores.php">Assesors</a></li>
				<li><a class="navbar-brand" href="../view/calificacion_doc.php"> Grades of documents </a></li>
			</ul>
			<ul class="nav navbar-nav navbar-rigth">
				<li><a class="navbar-brand" href="../php/closesion.php"><span class="glyphicon glyphicon-log.out"></span> Log out </a></li>
				<li><a class="navbar-brand"><?php echo $name; ?></a></li>
			</ul>
		</div>
	</nav>
</body>	
</html>