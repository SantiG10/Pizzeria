<?php
	session_start();
	unset($_SESSION['usuario']);
	echo "	<script>
				alert('Exito salida de sesión');
				window.location.href='../index.php';
			</script>";
?>
