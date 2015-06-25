<?php 
		require("conexion.php");
		$id=$_POST['txtId'];
		$nom=$_POST['txtNombre'];
		$ape=$_POST['txtApellidos'];
		$dir=$_POST['txtDireccion'];
		$bar=$_POST['txtBarrio'];
		$tel=$_POST['txtTelefono'];
		$ema=$_POST['txtEmail'];
		$cla=$_POST['txtClave'];

		$cnx=conexion::conectar();

		$q="insert into `clientes` (`id`, `nombre`, `apellido`, `direccion`, 
			`barrio`, `telefono`, `email`, `puntos`) 
			values('$id','$nom','$ape','$dir','$bar','$tel','$ema', '0')";
		$z= "insert into `usuarios` (`user`, `password`, `tipo`) VALUES ('$ema', '$cla', '3')";
		$sql = "Select user from usuarios where user='".$ema."'";
		$rt = mysql_query($sql,$cnx);
		if(mysql_num_rows($rt) > 0){
			echo "	<script>
						alert('Este usuario ya existe');
						window.location.href='./crear_cuenta.php';
					</script>";
			mysql_close($cnx);
		}else{
			mysql_query($z,$cnx);
			mysql_query($q,$cnx);
			echo "<script>alert('El usuario ha sido creado'); 
			window.location.href='./iniciar_sesion.php';
			</script>";
			mysql_close($cnx);	
    		
		}

		
		
?>