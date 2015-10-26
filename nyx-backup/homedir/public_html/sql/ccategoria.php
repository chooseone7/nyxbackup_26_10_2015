<?php
include("conexion.php");

$consulta="SELECT * FROM  categoria ORDER BY cod_categoria";

$ejecutar_consulta=$conexion->query($consulta);

while($registro=$ejecutar_consulta->fetch_assoc()){

$nombre_categoria=utf8_encode($registro["nombre_categoria"]);
$cod_categoria=utf8_encode($registro["cod_categoria"]);
echo "<option value='".$cod_categoria."'>".$nombre_categoria."</option>";
}
//$conexion->close();

?>