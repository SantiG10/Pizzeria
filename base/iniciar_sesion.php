<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Iniciar sesión</title>
		<link href="../css/inicio.css" rel="stylesheet">
		<link href="../css/flexboxgrid.css" rel="stylesheet">
	</head>
	<body>
			<?php
				include 'encabezado.php';
			?>
				<form name="f1" action="iniciar_sesion2.php" method="post">
					<div class="row center-xs">
	  				<div class="col-xs-8 col-md-6">
	      			<div class="box text-left">
		        		<h2> Iniciar Sesión </h2>
		          	<div class="field">
		            	<input type="txt" name="txtUsuario"/ class="form-control" placeholder= "Alguien@example.com" ></label><br/>
		          	</div>
		          	<div class="field">
		            	<input type="password" name="txtClave"/ class="form-control" placeholder= "Contraseña"></label><br/>
		          	</div>
		          	<div class="actions">
		            	<input type="button" value="Aceptar" onclick="validar()"/ class="btn2 be-green white" ><br/>
		          	</div>
	      			</div>
	  				</div>
					</div>
				<form>
				<script src="../script/iniciar_sesion.js"></script>	
	</body>
</html>