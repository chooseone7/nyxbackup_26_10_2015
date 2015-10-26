	<section id="contenido">
				<section id="principal-productos">
				<article id="galeria-inicio"></article>
					<div id="galeria-nyx-productos">
						<div class="mostrar-descripcion-producto">
<?php include_once("sql/conexion.php");
$item=$_GET["item"];					
$consulta="SELECT p.cod_producto, p.item_nro, p.watt, p.chip, p.input_voltage, p.lamp_size, p.hrs, p.material, p.luminous, p.luminous_flux, p.cut_out, p.body_color, p.led_color, p.life_span, p.ip, p.ip, p.guarantee, p.led_type_qty, p.frecuency_range, p.image1, p.descripcion, c.nombre_categoria, tp.nombre_tipo_producto FROM  producto p LEFT JOIN categoria c on p.cod_categoria=c.cod_categoria LEFT JOIN tipo_producto tp on p.cod_tipo_producto=tp.cod_tipo_producto WHERE item_nro= '$item' ORDER BY watt limit 0,1";

$ejecutar_consulta=$conexion->query($consulta);
					
				while($registro=$ejecutar_consulta->fetch_assoc()){
					echo '<p><img src="img/imgproductos/interiores/'.$registro['image1'].'"align="middle"  width="297" height="198" id="img_01" data-zoom-image="img/imgproductos/interiores/'.$registro['image1'].'" style="padding-right:2em"/></p>';
					echo "Zoom de imagen - apunte con el cursor";
					echo "<p><br/><br/><h3>Descripcion:</h3> ".utf8_encode($registro['descripcion'])."</br>";
					echo "Material:<b>".$registro['material']."</b><br/>";
					echo "Item nro:<b>".$registro['item_nro']."</b><br/>";
					echo "Lamp size:<b>".$registro['lamp_size']."</b><br/>";
					echo "Watt:<b>".$registro['watt']."</b><br/>";
					echo "Categoria:<b>".$registro['nombre_categoria']."</b><br/>";
					echo "Tipo de producto:<b>".$registro['nombre_tipo_producto']."</b><br/></p>";

					echo "<hr id='linea-producto'>";
				}
					?></div>
					
				</div>
				</section>
			</section>