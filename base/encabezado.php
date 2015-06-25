<header>
	<nav class="be-green white large-padding">
		<ul class="no-list row center-xs middle-xs">
			<li class="col-md">
				<a href="http://localhost:8888/Pizzeria/index.php" ><h1 class="no-margin" id ="logo">Pizzeria Herrera e hijos S.L</h1></a>
			</li>
			<li class="col-md">
					<img src="http://localhost:8888/Pizzeria/images/grupos/pizzas.jpg" class="img-grup">
					<a href="http://localhost:8888/Pizzeria/base/pizzas.php"><h3>Pizzas</h3></a>
			</li>
			<li class="col-md">
					<img src="http://localhost:8888/Pizzeria/images/grupos/entrantes.jpg" class="img-grup">
					<a href="http://localhost:8888/Pizzeria/base/entrantes.php"><h3>Entradas</h3></a>
			</li>
			<li class="col-md">
					<img src="http://localhost:8888/Pizzeria/images/grupos/postres.jpg" class="img-grup">
					<a href="http://localhost:8888/Pizzeria/base/postres.php"><h3>Postres</h3></a>
			</li>
			<li class="col-md">
					<img src="http://localhost:8888/Pizzeria/images/grupos/bebidas.jpg" class="img-grup">
					<a href="http://localhost:8888/Pizzeria/base/bebidas.php"><h3>Bebidas</h3></a>
			</li> 
			<?php
				if(isset($_SESSION['usuario'])){
			?>
			<li class="col-md">
					<a href="http://localhost:8888/Pizzeria/base/hacer_pedido.php"><h3>Hacer Pedido</h3></a>
			</li>
			<li class="col-md">
					<a href="http://localhost:8888/Pizzeria/base/cerrar_sesion.php"><h3>Cerrar Sesión</h3></a>
			</li>
			<?php
				}else{
			?>
			<li class="col-md">
					<a href="http://localhost:8888/Pizzeria/base/iniciar_sesion.php"><h3>Iniciar Sesión</h3></a>
			</li>
			<li class="col-md">
					<a href="http://localhost:8888/Pizzeria/base/crear_cuenta.php"><h3>Crear Cuenta</h3></a>
			</li>
			<?php
				}
			?>
			
		</ul>
	</nav>
</header>