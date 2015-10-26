<?php
include("sql/conexion.php");
$consulta="SELECT nombre_usuario, contrasenia FROM usuario WHERE nombre_usuario='".$_POST["nombre_usuario_txt"]."'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;	
while($usuario=$ejecutar_consulta->fetch_assoc()){
//if($num_regs!=0){}

	if($_POST["nombre_usuario_txt"]==$usuario["nombre_usuario"] && $_POST["contrasenia_txt"]==$usuario["contrasenia"]){
		session_start();
		$_SESSION["autentificado"]=true;
		$_SESSION["usuario"]=$_POST["nombre_usuario_txt"];
		header("Location: producto_abm.php");
	 }
	 else	
	 {
	 	echo "error al registrar. Intente nuevamente";
	 	header("Location:index.php?error=si");
	 }
	 echo "entro al while";exit;
}
		if($_SESSION["autentificado"]!=true)
		{	
			sleep(1);
		echo "error al registrar. Intente nuevamente";
	 	header("Location:index.php?error=si");
		}
		 echo "fuera del while";exit;
?>