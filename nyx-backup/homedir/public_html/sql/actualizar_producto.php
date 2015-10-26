<?php
include("conexion.php");


$actualizar="
UPDATE producto SET
item_nro='".$_POST['item_nro']."',
descripcion='".$_POST['descripcion']."',
watt='".$_POST['watt']."',
lamp_size='".$_POST['lamp_size']."',
hrs=".$_POST['hrs'].",
material='".$_POST['material']."',
image1='".$_POST['image1']."',
image2='".$_POST['image2']."',
cod_categoria=".$_POST['cod_categoria'].",
cod_tipo_producto=".$_POST['cod_tipo_producto']."
WHERE item_nro='".$_GET['item_nro']."'";

$resultado=$conexion->query($actualizar);
mysqli_close($conexion);
?>
<script>
window.location="../producto_abm.php";
</script>