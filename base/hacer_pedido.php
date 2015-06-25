<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hacer Peddido</title>
	<link href="../css/inicio.css" rel="stylesheet">
	<link href="../css/flexboxgrid.css" rel="stylesheet">
</head>
<body>
	<?php
		include'encabezado.php'; 
	?>
	<form name="f1" action="crear_cuenta2.php" method="post">
		<div class="row center-xs">
			<div class="col-xs-8 col-md-6">
				<div class="box text-left">
					<h2> Hacer Pedido </h2>	
					<table class="table2">
						<div class="field">
							<tr>
								<td>
									<h3 align="left">Pizza:
										<select name="tipo_pizza" id="tipo" class="select-piz">
										<option value="99">Selecionar</option>
										<option value="1">Cerdo Agridulce</option>
										<option value="2">Ternera con Bambú</option>
										<option value="3">Pollo con Almendras</option>
										<option value="4">Tres Delicias</option>
									</select>
									</h3>
									</td>
								<td>
									<h3>Tamaño:
									<select name="tama_pizza" id="tam-piz">
										<option value="99">Selecionar</option>
										<option value="1">Normal ($15000)</option>
										<option value="2">Grande ($22000)</option>
										<option value="3">Familiar ($30000)</option>
									</select>
									</h3>
								</td>
								<td>
									<h3>Cantidad:
									<select name="canti_pizza" id="can-piz">
										<option value="99">Selecionar</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
									</h3>
								</td>
							</tr>	
						</div>
						<div class="field">
							<tr>
								<td>
									<h3 align="left">Entrandas:
									<select name="tipo_entradas" id="entra" class="select-entra">
										<option value="99">Selecionar</option>
										<option value="1">Pan de Gamba</option>
										<option value="2">Pan Chino</option>
										<option value="3">Rollo de Primavera</option>
										<option value="4">Ensalada China de Col</option>
									</select>
									</h3>
								</td>
								<td>	
									<h3>Tamaño:
									<select name="tama_entradas" id="tama-entra">
										<option value="99">Selecionar</option>
										<option value="1">Normal ($15000)</option>
										<option value="2">Grande ($22000)</option>
										<option value="3">Familiar ($30000)</option>
									</select>
									</h3>
								</td>
								<td>
									<h3>Cantidad:
									<select name="canti_entradas" id="can-ent">
										<option value="99">Selecionar</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
									</h3>
								</td>	
							</tr>	
						</div>
						<div class="field">
							<tr>
								<td>
								<h3 align="left">Postres:
									<select name="tipo_postre" id="pos" class="select">
										<option value="99">Selecionar</option>
										<option value="1">Platano Frito</option>
										<option value="2">Helado</option>
										<option value="3">Flan Chino</option>
									</select>
									</h3>
								</td>
								<td>
									<h3>Cantidad:
									<select name="canti_postre" id="can-pos">
										<option value="99">Selecionar</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
									</h3>
								</td>
							</tr>
						</div>
						<div class="field">
							<tr>
								<td>
									<h3 align="left">Bebidas:
									<select name="tipo_bebida" id="bebi" class="select">
										<option value="99">Selecionar</option>
										<option value="1">Agua</option>
										<option value="2">Refresco</option>
										<option value="3">Cerveza</option>
									</select>
									</h3>
								</td>
								<td>
									<h3>Cantidad:
									<select name="canti_bebida" id="can-bebi">
										<option value="99">Selecionar</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
									</h3>
								</td>
							</tr>
						</div>
						<div class="field">
							<tr>
								<td>
									<h3 align="left">Entrega:
									<select name="entrega" id="entre" class="select">
										<option value="99">Selecionar</option>
										<option value="1">envio</option>
										<option value="2">Recoge en el restaurante</option>
									</select>
									</h3>
								</td>
							</tr>
						</div>
					</table>
					<div class="actions">
					<input type="button" value="Aceptar" onclick="validar()"/ class="btn2 be-green white" ><br/>
					</div>
				</div>
			</div>
		</div>
	<form>
	<script src="../script/hacer_pedido.js"></script>	
</body>
</html>