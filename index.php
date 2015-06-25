<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Pizzería</title>
		<link href="./css/inicio.css" rel="stylesheet">
		<link href="./css/flexboxgrid.css" rel="stylesheet">

	</head>
	<body>
		<main>
			<?php
				include './base/encabezado.php';
			?>
			<img src="./images/fondo.jpg" class="fondo">
		</main>
		<!-- <footer>
				<h1> Pizzería Herrera e hijos S.L </h1>
				<p> Dirección: CL 16 CRA 71 - 40 </p>
				<p> Telefono: 3457489</p>
		</footer> -->

		<?php include './base/footer.php' ?>
	</body>
</html>
