<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Postres</title>
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
					<img src="../images/productos/postres/platano-frito.jpg" class="img-pro"/>
					<br/>
					<h2> Platano Frito </h2>
				</td>
				<td>
					<img src="../images/productos/postres/helado.jpg" class="img-pro"/>
					<br/>
					<h2> Helado </h2>
				</td>
				<td>
					<img src="../images/productos/postres/flan-chino.jpg" class="img-pro"/>
					<br/>
					<h2> Flan Chino </h2>
				</td>
			</tr>
	</table>
	<?php include 'footer.php' ?>
	</body>
</html>
