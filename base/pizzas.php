<?php
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pizzas</title>
	<link href="../css/inicio.css" rel="stylesheet">
	<link href="../css/flexboxgrid.css" rel="stylesheet">
</head>
<body>
	<?php
		include 'encabezado.php';
	?>
	<table  class="table">
		<tr>
			<td>
				<img src="../images/productos/pizzas/cerdo.jpg" class="img-pro"/>
				<br/>
				<h2> Cerdo Agridulce </h2>
			</td>
			<td>
				<img src="../images/productos/pizzas/ternera.jpg" class="img-pro"/>
				<br/>
				<h2>Ternera con Bambú</h2>
			</td>
			<td>
				<img src="../images/productos/pizzas/polloAlmendras.jpg" class="img-pro"/>
				<br/>
				<h2>Pollo con Almendras</h2>
			</td>
			<td>
				<img src="../images/productos/pizzas/tresDelicias.jpeg" class="img-pro"/>
				<br/>
				<h2>Tres Delicias</h2>
			</td>
		</tr>
	</table>
	<?php include 'footer.php' ?>
</body>
</html>
