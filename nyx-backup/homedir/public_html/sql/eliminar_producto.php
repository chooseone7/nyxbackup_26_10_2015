<?php
include("conexion.php");


$eliminar="DELETE FROM  producto WHERE item_nro='".$_GET['item_nro']."'";

$resultado=$conexion->query($eliminar);
mysqli_close($conexion);
?>
<script>
window.location="../producto_abm.php";
alert("Item eliminado");
</script>