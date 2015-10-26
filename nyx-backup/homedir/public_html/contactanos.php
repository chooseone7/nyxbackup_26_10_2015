<script type="text/javascript">
		function validarForm(){
		var verificar=true;
		var expRegNombre =/^a-<A-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
		var expRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
		
			if(!document.contactanos_nyx.nombre.value){
			alert("el campo Nombre es requerido");
			document.contactanos_nyx.nombre.focus();
			verificar=false;
			}else if(!document.contactanos_nyx.nombre.value){
			  alert("El campo Nombfre no es válido");
			  document.contactanos_nyx.nombre.focus()
				verificar=false;
			}else if(!document.contactanos_nyx.email.value){
			alert("el campo email requerido");
			document.contactanos_nyx.email.focus();
			verificar=false;
			}else if(!expRegEmail.exec(document.contactanos_nyx.email.value)){
			  alert("El campo email no es válido");
			  document.contactanos_nyx.email.focus()
				verificar=false;
			}
			else if(!document.contactanos_nyx.telefono.value){
			alert("el campo telefono requerido");
			document.contactanos_nyx.telefono.focus();
			verificar=false;
			}else if(!document.contactanos_nyx.telefono.value){
			  alert("El campo telefono no es válido");
			  document.contactanos_nyx.telefono.focus()
				verificar=false;
			}else if(!document.contactanos_nyx.compania.value){
				alert("el campo compania requerido");
				document.contactanos_nyx.compania.focus();
				verificar=false;
			}else if(!document.contactanos_nyx.compania.value){
				alert("El campo compania no es válido");
				document.contactanos_nyx.compania.focus()
				
			}
			else if(!document.contactanos_nyx.mensaje.value){
				alert("el campo mensaje requerido");
				document.contactanos_nyx.mensaje.focus();
				verificar=false;
				}else if(!document.contactanos_nyx.mensaje.value){
				alert("El campo mensaje no es válido");
				document.contactanos_nyx.mensaje.focus();
				verificar=false;
				}
			if(verificar){
			document.contactanos_nyx.submit();
			}
			
		}
		function limpiarForm(){
			document.getElementById("contactanos_nyx").reset();
		}

		window.onload=function(){
				document.contactanos_nyx.enviar_btn.onclick=validarForm;
				var botonLimpiar;
				botonLimpiar=document.getElementById("limpiar_campos");
				botonLimpiar.onclick=limpiarForm;
			}

</script>
<style>
span{
	color:#424242;
	font-size:1.5em;
}
</style>
<div style="clear:both;"></div>
	<section id="contenido">
    			<!--<div id="galeria-nyx-contactanos" style="background:none;"> -->
				<section id="principal-contactanos" style="display:inline-block;margin-right:0.5em; max-width:87%;">
                 <div id="info-nyxelectric"><H2>Nyx Electric</H2><hr><p> Informacion de la empresa</p>
						<p>	Ovidio Barberyss Nº9</p>
						<p>Santa Cruz - Bolivia</p>
						<p>Oficina 3305197</p>
						<p>Celular 768-91711</p>
                        
                        <div id="encabezado-form-contactos"><p>Enviar mensaje</p><br/></div>
                 <!-- </div>-->
              
    <form id="contactanos_nyx" name="contactanos_nyx" method="post"  enctype="application/x-www-form-urlencoded" action="sql/enviar-email.php"><!--sql/enviar-email.php -->

			<fieldset>
            <div class="centrar-form-contactanos">	
            <label for="nombre">Nombre	</label>
            <input type="text" id="nombre" class="cambio" name="nombre" placeholder="Ingrese sus nombre" value="" />
            </div>

            <div class="centrar-form-contactanos">	
            <label for="email">Correo-e	</label>
            <input type="email" id="email" class="cambio" name="email"  placeholder="Ingrese su correo electronico" value="" />
            </div> 
            <div class="centrar-form-contactanos">	
           <label for="telefono">telefono&nbsp;</label>
            <input type="text" id="telefono"  class="cambio" name="telefono" placeholder="Ingrese su numero telefonico" value=""/>
            </div>
            <div class="centrar-form-contactanos">	
            <label for="compania">Compa&ntilde;&iacute;a</label>
            <input type="text" id="compania" class="cambio" name="compania"  placeholder="Ingrese el nombre de su compañia" value=""/>
            </div>
             <div class="centrar-form-contactanos">	
            <label for="mensaje">Mensaje</label>
            <textarea ="text" id="mensaje" name="mensaje" class="cambio" rows="8" cols="10" placeholder="Introduzca su mensaje" ></textarea>
            </div>
            <div class="centrar-form-contactanos">
            <label for="nombre_ciudad">Ciudades</label>
            <select id="ciudad" name="nombre_ciudad" class="cambio">
				<?php include("sql/cciudad.php");?>
            </select>
			</div>
			<div class="centrar-form-contactanos">
            <input type="button" value="Enviar" id="enviar_btn" name="enviar_btn"/>
			<input type="button" value="Vaciar" id="limpiar_campos" name="limpiar_campos"/>
			  </div>
			<?php
			error_reporting(E_WARNING ^ E_NOTICE ^E_ALL);
			if(isset($_GET["respuesta"])){
				echo "<span>".$_GET["respuesta"]."</span>";
			}
			?>
        </fieldset>
	</form>
                        <br/>
						
					</section>
					<aside id="aside-novedades">
					
                         <div class="envoltorio-novedades">
                            <div id="lateral-novedades-contactanos">
                                	<b>Contactanos:</b><br/>
					Av.   Ovidio Barbery,8888 esq. Francisco Amilss<br/>
					#492 Z/b Mc. Donald<br/>
					 Uv. 0036 Mza. 0021<BR/>
					Santa Cruz - Bolivia<br/>
					Oficina 3305197<br/>
					Celular 708-51402
						</p>
                            </div>
							<div id="lateral-novedades-novedades">
								<p> novedades novedades</p>
								
							</div><img src="img/certificate2.png" width="260" height="36" alt="certificados" /> 
						</div>

					</aside>
                    </div>
						
		
		</section>
       
		
	
		

		