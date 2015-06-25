<?php
 class conexion{
	static function conectar(){
		$con=mysql_connect("localhost","root","");
		mysql_select_db("pizzeria",$con);
		return $con;
	}
 }
?>
