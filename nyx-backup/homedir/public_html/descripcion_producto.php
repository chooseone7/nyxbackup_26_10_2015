	<section id="contenido">
				<section id="principal-productos">
				<article id="galeria-inicio"></article>
					<div id="galeria-nyx-productos">
						<div class="mostrar-descripcion-producto">
<?php include_once("sql/conexion.php");
$item=$_GET["item"];					

$consulta="SELECT p.cod_producto, p.item_nro, p.watt, p.chip, p.input_voltage, p.lamp_size, p.hrs, p.material, p.luminous, p.luminous_flux, p.cut_out, p.body_color, p.led_color, p.life_span, p.ip, p.ip, p.guarantee, p.led_type_qty, p.frecuency_range, p.image1, p.descripcion, c.nombre_categoria, tp.nombre_tipo_producto FROM  producto p LEFT JOIN categoria c on p.cod_categoria=c.cod_categoria LEFT JOIN tipo_producto tp on p.cod_tipo_producto=tp.cod_tipo_producto WHERE item_nro= '$item' ORDER BY watt limit 0,1";

$ejecutar_consulta=$conexion->query($consulta);
$categoria_pagina=$_GET["categoria_pagina"];
$categoria="";
 if($_GET["categoria_pagina"]=="interiores")	
{$categoria=('interiores');}	
else
{$categoria=('exteriores');}	

//echo $categoria;exit;

				while($registro=$ejecutar_consulta->fetch_assoc()){
					
					echo '<p><img src="img/imgproductos/'.$registro['nombre_categoria'].'/'.$registro['image1'].' "align="middle"  width="297" height="198" id="img_01" data-zoom-image="img/imgproductos/'.$registro['nombre_categoria'].'/'.$registro['image1'].'" style="padding-right:2em"/></p>'; 
					/*echo '<p><img src="img/imgproductos/'.
					$categoria.'"/'.$registro['image1'].'"align="middle"  width="297" height="198" id="img_01" data-zoom-image="img/imgproductos/'.
					$cateoria.'"/'.$registro['image1'].'" style="padding-right:2em"/></p>';*/
					echo "<h6>Zoom de imagen - apunte con el cursor</h6>";
					echo "<p><br/><br/><h3>Descripcion:</h3><p> ".utf8_encode($registro['descripcion'])."</p></br>";
					echo "<h4>Material:</h4> <h5>".$registro['material']."</h5><br/>";
					echo "<h4>Item nro:</h4> <h5>".$registro['item_nro']."</h5><br/>";
					echo "<h4>Lamp size:</h4> <h5>".$registro['lamp_size']."</h5><br/>";
					echo "<h4>Watt: </h4><h5>".$registro['watt']."</h5><br/>";
					echo "<h4>Categoria:</h4> <h5>".$registro['nombre_categoria']."</h5><br/>";
					echo "<h4>Tipo de producto:</h4> <h5>".$registro['nombre_tipo_producto']."</h5><br/>";

					echo "<hr id='linea-producto'>";
				}
					?></div>
					
				</div>
				</section>
			</section>