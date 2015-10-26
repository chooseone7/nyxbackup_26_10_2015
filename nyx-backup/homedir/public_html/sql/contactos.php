<?php
include("sql/conexion.php");
$consulta="SELECT * FROM  ciudad ORDER BY nombre_ciudad";

$ejecutar_consulta=$conexion->query($consulta);

while($registro=$ejecutar_consulta->fetch_assoc()){

$nombre_ciudad=utf8_encode($registro["nombre_ciudad"]);
	echo "<option value='".$nombre_ciudad."'>".$nombre_ciudad."</option>";
}
?>