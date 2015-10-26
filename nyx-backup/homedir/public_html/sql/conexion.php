<?php
function conectarse()
{	
	$servidor="localhost";
	$usuario="nyxelect_marco";
	$password="Marco123";
	$bd="nyxelect_bd";
	
	$conectar=new MySQLi($servidor,$usuario,$password,$bd)or die("No se pudo conectar");
	return $conectar;
}
$conexion=conectarse();
?>