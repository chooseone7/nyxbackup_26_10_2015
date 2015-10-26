<?php
include("sql/conexion.php");
$consulta="SELECT * FROM  producto ORDER BY watt";
$ejecutar_consulta=$conexion->query($consulta);
$nro_reg=mysqli_num_rows($ejecutar_consulta);

//var_dump($nro_reg);exit;

if($nro_reg==0){
echo "No se han encontrado productos";
}
$reg_por_pagina=4;
$nro_pagina=$_GET["num"];
if(is_numeric($nro_pagina))
	$inicio=($nro_pagina-1)*$reg_por_pagina;
	else
	$inicio=0;
	/*$consulta="SELECT p.item_nro, p.descripcion, p.image1, c.nombre_categoria FROM producto p inner join categoria c on p.cod_categoria=c.cod_categoria WHERE descripcion LIKE '%".$search."%' OR item_nro LIKE '%".$search."%' ORDER BY item_nro ";*/

	$consulta="SELECT p.item_nro, p.material, p.lamp_size, p.watt,  p.descripcion, p.image1, c.nombre_categoria, tp.nombre_tipo_producto FROM producto p inner join categoria c on p.cod_categoria=c.cod_categoria inner join tipo_producto tp on p.cod_tipo_producto=tp.cod_tipo_producto ORDER BY watt LIMIT $inicio, $reg_por_pagina";
	//var_dump($consulta);exit;
	$can_paginas=$nro_reg/$reg_por_pagina;
	$ejecutar_consulta=$conexion->query($consulta);
$item_nro=$_GET["item"];
while($registro=$ejecutar_consulta->fetch_assoc()){
		  $item_nro=$registro["item_nro"];
		  echo "<a href='?op=descripcion_producto&item=".($item_nro)."'><img src='img/imgproductos/".$registro["nombre_categoria"]."/".$registro["image1"]."'align='middle'  width='200' height='120' /></a>";
		//	echo "<h3>Descripcion ".$registro['descripcion']."</h3>";
			echo "Tipo producto: <h5>".$registro['nombre_tipo_producto']."</h5><br/>";
			echo "Item nro: <h5>".$registro['item_nro']."</h5><br/>";
			echo "Lamp size: <h5>".$registro['lamp_size']."</h5><br/>";
			echo "Watt: <h5>".$registro['watt']."</h5><br/>";
			echo "<hr id='linea-producto'>";
}
					echo "<div id='paginador'>";
					 if($nro_pagina>1)
						echo "<a href='?op=productos&num=".($nro_pagina-1)."'><img class='anterior'src='img/gif/arrow-left.gif' /></a>";
						for($i=1;$i<=$can_paginas;$i++){
							if($i==$nro_pagina)
							echo "<p>$i|</p> ";/*style='font-size:1.3em;'*/
							else
							echo "<a href='?op=productos&num=$i'>$i</a>";
						}
					if($nro_pagina<$can_paginas)
						echo "<a href='?op=productos&num=".($nro_pagina+1)."'><img class='siguiente' src='img/gif/arrow-right.gif'/></a>";
					echo "</div>";
?>