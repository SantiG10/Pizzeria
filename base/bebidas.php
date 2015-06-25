<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bebidas</title>
		<link href="../css/inicio.css" rel="stylesheet">
		<link href="../css/flexboxgrid.css" rel="stylesheet">
	</head>
	<body>
			<?php 
					include'encabezado.php';
			 ?>
			<table  class="table">
					<tr>
						<td>
							<img src="../images/productos/bebidas/refrescos.jpg" class="img-pro"/>
							<br/>
							<h2> Refrescos </h2>
						</td>
						<td>
							<img src="../images/productos/bebidas/agua.jpeg" class="img-pro"/>
							<br/>
							<h2> Agua </h2>
						</td>
						<td>
							<img src="../images/productos/bebidas/cervezas.jpg" class="img-pro"/>
							<br/>
							<h2> Cervezas </h2>
						</td>
				</tr>
		</table>
	</body>
</html>