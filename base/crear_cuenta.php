<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Crear Cuenta</title>
		<link href="../css/inicio.css" rel="stylesheet">
		<link href="../css/flexboxgrid.css" rel="stylesheet">
	</head>
	<body>
				<?php
					include 'encabezado.php';
				?>
				<form name="f1" action="crear_cuenta2.php" method="post">
					<div class="row center-xs">
	  				<div class="col-xs-8 col-md-6">
	      			<div class="box text-left">
		        		<h2> Crear Cuenta </h2>
		          	<div class="field">
		            	<input type="txt" name="txtNombre"/ class="form-control" placeholder= "Nombres" ></label><br/>
		          	</div>
		          	<div class="field">
		            	<input type="txt" name="txtApellidos"/ class="form-control" placeholder= "Apellidos" ></label><br/>
		          	</div>
		          	<div class="field">
		            	<input type="txt" name="txtId"/ class="form-control" placeholder= "Identificación" ></label><br/>
		          	</div>
		          	<div class="field">
		            	<input type="txt" name="txtDireccion"/ class="form-control" placeholder= "Dirección" ></label><br/>
		          	</div>
		          	<div class="field">
		            	<input type="txt" name="txtBarrio"/ class="form-control" placeholder= "Barrio" ></label><br/>
		          	</div>
		          	<div class="field">
		            	<input type="txt" name="txtTelefono"/ class="form-control" placeholder= "Teléfono" ></label><br/>
		          	</div>
		          	<div class="field">
		            	<input type="txt" name="txtEmail"/ class="form-control" placeholder= "Email" ></label><br/>
		          	</div>
		          	<div class="field">
		            	<input type="password" name="txtClave"/ class="form-control" placeholder= "Escribe una Contraseña (Mínimo 8 Caracteres)"></label><br/>
		          	</div>
		          	<div class="field">
		            	<input type="password" name="txtClave2"/ class="form-control" placeholder= "Vuelve a escribir la Contraseña (Mínimo 8 Caracteres)"></label><br/>
		          	</div>
		          	<div class="actions">
		            	<input type="button" value="Aceptar" onclick="validar()"/ class="btn2 be-green white" ><br/>
		          	</div>
	      			</div>
	  				</div>
					</div>
				<form>
				<script src="../script/crear_cuenta.js"></script>	
	</body>
</html>