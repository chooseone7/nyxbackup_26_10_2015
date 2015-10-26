<!-- -->
<?php $footer_opcion="hay pie";?>
	<section id="contenido">
				<section id="principal">
					<article id="galeria-nyx">		
			<div class="flexslider">
						<ul class="slides">
                        
							<li>
								<a href="#">
								<img src="img/01.jpg" alt="luces led"/>
                                </a>
                                <p class="flex-caption">
								  nyxelectric.com</p>
							</li>
                            <li>
								<a href="#">
								<img src="img/02.jpg" alt="luces led"/></a>
								<p class="flex-caption">
								  nyxelectric.com</p>
							</li>
             
						
							
						</ul>
					</div>
		<!--<div class="mostrar-descripcion-buscar-producto2"> </div>-->
	
		
					</article>
						<div id="galeria-nyx">
							<div id="productos-recomendables">
								 <p class="lista-productos">   </br>     
								  <h4 style="text-align:center; color:#424242;text-decoration:underline;">Categoria  Productos</h4><br/><br/>
								<a href="#">Exteriores</a><br/><br/>
								<a href="#">Interiores</a><br/><br/>
								<a href="#">Griferia</a><br/><br/>
	
								<a href="#">Placas</a><br/><br/>
								<a href="#">Novedades</a><br/><br/>
								<a href="#">Cliente</a><br/
								
								
								</p>
							 
							 </div>
							 
<div id="sector-categoria">
				<!-- <div id="certificados1"><img src="img/certificate2.png" alt="luces led"></div>-->
                     
				
 <div id="demo">
        <div class="container">
          <div class="row">
           

              <div id="nyx-demo" class="nyx-carousel">
                <div class="item1" >
                	<?php 

								include("sql/conexion.php");
								$consulta="SELECT * FROM  producto WHERE p.item_'REF/10W' ORDER BY c.nombre_categoria LIMIT 0,1 ";
								$ejecutar_consulta=$conexion->query($consulta);
								$nro_reg=mysqli_num_rows($ejecutar_consulta);


										$consulta="SELECT p.item_nro, p.material, p.lamp_size, p.watt,  p.descripcion, p.image1, c.nombre_categoria FROM producto p inner join categoria c on p.cod_categoria=c.cod_categoria WHERE p.item_nro='R609/30w' ORDER BY c.nombre_categoria LIMIT 0,1";
										$ejecutar_consulta=$conexion->query($consulta);
									while($registro=$ejecutar_consulta->fetch_assoc()){
												  $item_nro=$registro["item_nro"];
										  echo "<a href='?op=descripcion_producto&item=".($item_nro)."'><img src='img/imgproductos/interiores/R609.30w.JPG' alt='nyx Image'></a>";
										}
							?><p class="productos">
							 Spot LED de 30 watts <br/>
                             COB R609<br/>
                             Luminaria de empotrar<br/>
                          </p></div>
                	
                <div class="item1">

                		<?php
                		$consulta="SELECT p.item_nro, p.material, p.lamp_size, p.watt,  p.descripcion, p.image1, c.nombre_categoria FROM producto p inner join categoria c on p.cod_categoria=c.cod_categoria WHERE p.item_nro='BR225/24W' ORDER BY c.nombre_categoria LIMIT 0,1";
										$ejecutar_consulta=$conexion->query($consulta);
						while($registro=$ejecutar_consulta->fetch_assoc()){
										 $item_nro=$registro["item_nro"];
										  echo "<a href='?op=descripcion_producto&item=".($item_nro)."'><img src='img/imgproductos/interiores/0326.JPG' alt='nyx Image'></a>";
						}?>
                	
 						<p class="productos">
                              Panel LED de 24 watts <br/>
                              BR180/24W<br/>
                              Luminaria de empotrar<br/>
                           </p>
                </div>
                <div class="item1">

                		<?php
                		$consulta="SELECT p.item_nro, p.material, p.lamp_size, p.watt,  p.descripcion, p.image1, c.nombre_categoria FROM producto p inner join categoria c on p.cod_categoria=c.cod_categoria WHERE p.item_nro='e27/7W' ORDER BY c.nombre_categoria LIMIT 0,1";
										$ejecutar_consulta=$conexion->query($consulta);
						while($registro=$ejecutar_consulta->fetch_assoc()){
										 $item_nro=$registro["item_nro"];
										  echo "<a href='?op=descripcion_producto&item=".($item_nro)."'><img src='img/imgproductos/interiores/e27.7W.JPG' alt='nyx Image'></a>";
						}?>
                	
                	
                <p class="productos">
                                  Foco LED de 8 watts<br/>
                                  E-27-8W<br/>
                                  Rosca Standard<br/>
                                 </p>
                </div>
                <div class="item1">

                		<?php
                		$consulta="SELECT p.item_nro, p.material, p.lamp_size, p.watt,  p.descripcion, p.image1, c.nombre_categoria FROM producto p inner join categoria c on p.cod_categoria=c.cod_categoria WHERE p.item_nro='GO392' ORDER BY c.nombre_categoria LIMIT 0,1";
										$ejecutar_consulta=$conexion->query($consulta);
						while($registro=$ejecutar_consulta->fetch_assoc()){
										 $item_nro=$registro["item_nro"];
										  echo "<a href='?op=descripcion_producto&item=".($item_nro)."'><img src='img/imgproductos/exteriores/0540.JPG' alt='nyx Image'></a>";
						}?>

                	
                <p class="productos">
                                  Foco LED de 8 watts<br/>
                                  E-27-8W<br/>
                                  Rosca Standard<br/>
                                 </p>
                </div>
                <div class="item1">
                		<?php
                		$consulta="SELECT p.item_nro, p.material, p.lamp_size, p.watt,  p.descripcion, p.image1, c.nombre_categoria FROM producto p inner join categoria c on p.cod_categoria=c.cod_categoria WHERE p.item_nro='GO508' ORDER BY c.nombre_categoria LIMIT 0,1";
										$ejecutar_consulta=$conexion->query($consulta);
						while($registro=$ejecutar_consulta->fetch_assoc()){
										 $item_nro=$registro["item_nro"];
										  echo "<a href='?op=descripcion_producto&item=".($item_nro)."'><img src='img/imgproductos/exteriores/0539.JPG' alt='nyx Image'></a>";
						}?>

                	
                <p class="productos">
                                  Foco LED de 8 watts<br/>
                                  E-27-8W<br/>
                                  Rosca Standard<br/>
                                 </p></div>
                <div class="item1">

						<?php
                		$consulta="SELECT p.item_nro, p.material, p.lamp_size, p.watt,  p.descripcion, p.image1, c.nombre_categoria FROM producto p inner join categoria c on p.cod_categoria=c.cod_categoria WHERE p.item_nro='GO393' ORDER BY c.nombre_categoria LIMIT 0,1";
										$ejecutar_consulta=$conexion->query($consulta);
						while($registro=$ejecutar_consulta->fetch_assoc()){
										 $item_nro=$registro["item_nro"];
										  echo "<a href='?op=descripcion_producto&item=".($item_nro)."'><img src='img/imgproductos/exteriores/0573.JPG' alt='nyx Image'></a>";
						}?>
                	
				<p class="productos">
                                  Foco LED de 8 watts<br/>
                                  E-27-8W<br/>
                                  Rosca Standard<br/>
                </p>
                </div>
                <div class="item1">
<?php
                		$consulta="SELECT p.item_nro, p.material, p.lamp_size, p.watt,  p.descripcion, p.image1, c.nombre_categoria FROM producto p inner join categoria c on p.cod_categoria=c.cod_categoria WHERE p.item_nro='T30W-COB' ORDER BY c.nombre_categoria LIMIT 0,1";
										$ejecutar_consulta=$conexion->query($consulta);
						while($registro=$ejecutar_consulta->fetch_assoc()){
										 $item_nro=$registro["item_nro"];
										  echo "<a href='?op=descripcion_producto&item=".($item_nro)."'><img src='img/imgproductos/exteriores/0639.JPG' alt='nyx Image'></a>";
						}?>
                	
				<p class="productos">
                                  Foco LED de 8 watts<br/>
                                  E-27-8W<br/>
                                  Rosca Standard<br/>
                                 </p>
                </div>
                <div class="item1">
                                  
                                 <?php
										$consulta="SELECT p.item_nro, p.material, p.lamp_size, p.watt,  p.descripcion, p.image1, c.nombre_categoria FROM producto p inner join categoria c on p.cod_categoria=c.cod_categoria WHERE p.item_nro='REF/10W' ORDER BY c.nombre_categoria LIMIT 0,1";
										$ejecutar_consulta=$conexion->query($consulta);
									while($registro=$ejecutar_consulta->fetch_assoc()){
												  $item_nro=$registro["item_nro"];
										  echo "<a href='?op=descripcion_producto&item=".($item_nro)."'><img src='img/imgproductos/exteriores/REF10W.JPG' alt='nyx Image'></a>";}
										?>  Foco LED de 8 watts<br/>
                                 				    	E-27-8W<br/>
                                			     Rosca Standard<br/>
                               				                   </p>
										
                                
                </div>
              </div>
              
          
          </div>
        </div>

    </div>
	</div>
	<div id="envoltorio-home">
					<div id="lista-productos-recomendables-home">
                   
					  <p class="contenido-producto">
				
						Luces led. Nuevo modelo de lamparas led estilo italiana de colgar, de 15w en luz cálida únicamente. 
						En colores: Rojo, dorado, plateado, blanco y negro.
						</p>
							<div>	                        
							<img class="home" src="img/imgproductos/interiores/0646.JPG" width="250" height="120" alt="luces led" />
							<img class="home" src="img/imgproductos/interiores/0649.JPG" width="250" height="120" alt="luces led" /> 
		      				</div>
		      				
					</div>
					 <div id="exhibiciones">
						<p>
					<b>Contactanos:</b><br/>
					Av.   Ovidio Barbery, esq. Francisco Amil<br/>
					#492 Z/b Mc. Donald<br/>
					 Uv. 0036 Mza. 0021<BR/>
					Santa Cruz - Bolivia<br/>
					Oficina 3305197<br/>
					Celular 768-91711 
						</p>
						
                    </div>
					</div>
</section>
				 
			
		

				</section> 

<!--SECCION CARRUSEL  style="width:200px;"-->

    <script>
    $(document).ready(function() {
      $("#nyx-demo").nyxCarousel({
        autoPlay: 3000,
        items : 3,
        itemsDesktop : [500,3],
        itemsDesktopSmall : [300,3]
      });

    });
    </script>