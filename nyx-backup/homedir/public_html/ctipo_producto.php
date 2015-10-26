<?php
//include("conexion.php");

$consulta="SELECT * FROM  tipo_producto ORDER BY cod_tipo_producto";

$ejecutar_consulta=$conexion->query($consulta);

while($registro=$ejecutar_consulta->fetch_assoc()){
$nombre_tipo_producto=utf8_encode($registro["nombre_tipo_producto"]);
$cod_tipo_producto=utf8_encode($registro["cod_tipo_producto"]);
echo "<option value='".$cod_tipo_producto."'>".$nombre_tipo_producto."</option>";
}
	
?>
