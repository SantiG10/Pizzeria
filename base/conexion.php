<?php 
 class conexion{
	static function conectar(){
		$con=mysql_connect("localhost","pizzeria","1234");
		mysql_select_db("pizzeria",$con);	
		return $con;
	}
 }
?>