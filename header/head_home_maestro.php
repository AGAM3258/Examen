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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.minjas"></script>
		<link rel="stylesheet" type="text/js" href="../js/bootstrap.min.js">
		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/modal.css">
		<style type="text/css">
					.but{background: #5858FF; border: 1px solid #5858FF; color: white;}
		.but:hover{background: #fff; color: black; border:1px solid #5858FF;}
		</style>
</head>
<body>

		<nav class="nav navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand"><img style="width: 66px;" src="../images/logos/logo_login.png"></a>
					<a class="navbar-brand" href="../view/home_maestro.php?user=".$user> Professor </a>
				</div>
			<ul class="nav navbar-nav">
				<li><a class="navbar-brand" href="../subirpdf/lista2.php"> Check files </a></li>
				<li><a class="navbar-brand" href="../view/canalizacion.php"> Channeled list </a></li>
				<li><a class="navbar-brand" href="../view/configAccount.php"> Account configuration </a></li>
				<li><a class="navbar-brand" href="../view/pregunta_extra.html" data-toggle="modal" data-target="#myModal">Create extra question </a></li>
			</ul>
			<ul class="nav navbar-nav navbar-rigth">
				<li><a href="../php/closesion.php"><span class="glyphicon glyphicon-log.out"></span> Log Out </a></li>
				<li><a class="navbar-brand"><?php echo $name; ?></a></li>
			</ul>
		</div>
	</nav>
	<!--/////////////////////////inicio del modal//////////////////////-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        </div>
    </div>
</div>
</body>	
</html>