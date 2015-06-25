<?php
    require("conexion.php");
    session_start();
		$U=$_POST['txtUsuario'];
		$C=$_POST['txtClave'];
		
			$q="select * from usuarios where user='".$U."' and password='".$C."'";
		
		$cnx=conexion::conectar();
		$r=mysql_query($q,$cnx);
		$nf=mysql_num_rows($r);
		mysql_close($cnx);
		if($nf>0){
			$_SESSION['usuario'] = $U;
			echo"<script> 
						window.location.href='../index.php';
					</script>";
		}else{
			echo"<script> 
						alert('Usuario o contraseña incorrecta');
						window.location.href='./iniciar_sesion.php';
					</script>";
		}

?>