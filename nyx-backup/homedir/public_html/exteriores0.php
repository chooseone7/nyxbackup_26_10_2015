	<section id="contenido">
				<section id="principal-productos">
					<article id="galeria-inicio">		
				</article>
						<div id="galeria-nyx-productos">

					<div id="lista-productos-recomendables" style="background:none;">
						<div class="mostrar-producto">
						<?php
					include("sql/conexion.php");
					$consulta="SELECT p.cod_producto, p.item_nro, p.watt, p.chip, p.input_voltage, p.lamp_size, p.hrs, p.material, p.luminous, p.luminous_flux, p.cut_out, p.body_color, p.led_color, p.life_span, p.ip, p.guarantee, p.led_type_qty, p.frecuency_range, p.image1, p.descripcion, c.nombre_categoria, tp.nombre_tipo_producto FROM  producto p LEFT JOIN categoria c on p.cod_categoria=c.cod_categoria LEFT JOIN tipo_producto tp on p.cod_tipo_producto=tp.cod_tipo_producto WHERE c.nombre_categoria= 'exteriores' ORDER BY watt";
					$ejecutar_consulta=$conexion->query($consulta);
					$nro_reg=mysqli_num_rows($ejecutar_consulta);

					//var_dump($nro_reg);exit;

					if($nro_reg==0){
					echo "No se han encontrado productos";
					}
					$reg_por_pagina=5;
					$nro_pagina=$_GET["num"];
					if(is_numeric($nro_pagina))
						$inicio=($nro_pagina-1)*$reg_por_pagina;
						else
						$inicio=0;
						echo $inicio;
						$consulta="SELECT p.cod_producto, p.item_nro, p.watt, p.chip, p.input_voltage, p.lamp_size, p.hrs, p.material, p.luminous, p.luminous_flux, p.cut_out, p.body_color, p.led_color, p.life_span, p.ip, p.guarantee, p.led_type_qty, p.frecuency_range, p.image1, p.descripcion, c.nombre_categoria, tp.nombre_tipo_producto FROM  producto p LEFT JOIN categoria c on p.cod_categoria=c.cod_categoria LEFT JOIN tipo_producto tp on p.cod_tipo_producto=tp.cod_tipo_producto WHERE c.nombre_categoria= 'exteriores' ORDER BY watt LIMIT $inicio, $reg_por_pagina";
						//var_dump($consulta);exit;
						$can_paginas=ceil($nro_reg/$reg_por_pagina);
						$ejecutar_consulta=$conexion->query($consulta);
					$item_nro=$_GET["item"];
					while($registro=$ejecutar_consulta->fetch_assoc()){
//var_dump($registro['image1']);
			  $item_nro=$registro["item_nro"];
							  echo "<a href='?op=descripcion_producto&item=".($item_nro)."&categoria_pagina=exteriores'><img src='img/imgproductos/exteriores/".$registro["image1"]."'align='middle'  width='200' height='120' /></a>";
							//	echo "<h3>Descripcion ".$registro['descripcion']."</h3>";
								echo "Material:<b>".$registro['material']."</b><br/>";
								echo "Item nro:<b>".$registro['item_nro']."</b><br/>";
								echo "Lamp size:<b>".$registro['lamp_size']."</b><br/>";
								echo "Watt:<b>".$registro['watt']."</b><br/>";
								echo "<hr id='linea-producto'>";
					}
										echo "<div id='paginador'>";
										 if($nro_pagina>1)
											echo "<a href='?op=exteriores&num=".($nro_pagina-1)."'><img class='anterior'src='img/gif/arrow-left.gif' /></a>";
											for($i=1;$i<=$can_paginas;$i++){
												if($i==$nro_pagina)
												echo "<p style='font-size:1.3em;'>$i|</p> ";
												else
												echo "<a href='?op=exteriores&num=$i'> $i </a>";
											}
										if($nro_pagina<$can_paginas)
											echo "<a href='?op=exteriores&num=".($nro_pagina+1)."'><img class='siguiente' src='img/gif/arrow-right.gif'/></a>";
										echo "</div>";
					?>


					
						</div>
					<!-- <p class="contenido-producto"></p> -->
						</div>
						<aside id="aside-productos">
					      <div class="envoltorio-productos">
                            <div id="lateral-novedades-productos">
                                <h3>Contactanos</h3>
                                <p>Ovidio Barbery Nยบ9</p>
                                <p>Santa Cruz - Bolivia</P>
                                <p>Oficina 3305197</p>
                                <p>Celular 768-91711</p>
                            </div>
							<div id="lateral-novedades-novedades">
								<p> novedades novedades</p>
								
							</div><img src="img/certificate2.png" width="260" height="36" alt="certificados" /> 
						</div>
						</aside>
					</div>
				</section>
			</section>