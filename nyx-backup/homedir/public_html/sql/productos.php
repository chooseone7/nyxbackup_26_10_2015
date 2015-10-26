<?php
include("sql/conexion.php");
$consulta="SELECT * FROM  producto ORDER BY item_nro";
//var_dump($consulta);exit;
//print_r($consulta);exit;

$ejecutar_consulta=$conexion->query($consulta);

while($registro=$ejecutar_consulta->fetch_assoc()){
		echo '<img src="'.$registro['image'].'"align="middle"  width="135" height="90" target="" style=""/>';
			echo "<h3>Descripcion ".$registro['descripcion']."</h3>";
			echo "Material:<b>".$registro['material']."</b><br/>";
			echo "Item nro:<b>".$registro['item_nro']."</b><br/>";
			echo "Lamp size:<b>".$registro['lamp_size']."</b><br/>";
			echo "Watt:<b>".$registro['watt']."</b><br/>";
			echo "<hr id='linea-producto'>";
}
?>