<?php
 class conexion {
   static function conectar() {
    // cambiar usuario y clave por el indicado.
	   $con = mysql_connect("localhost","pizzeria","1234");
		 mysql_select_db("pizzeria", $con);
		 return $con;
	 }
 }
?>
