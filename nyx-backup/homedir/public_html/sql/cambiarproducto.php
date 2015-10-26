<script>
	window.onload=function(){
		var lista=document.getElementById("item_nro");
		lista.onchange=seleccionarItem;

		}
		function seleccionarItem(){
			window.location="";
		}
	}
</script>

<style type="text/css">

h2#titulo_alta_producto{
	background:#212121;
	border-radius:0.3em;
	color:#fff;
	display:inline;
	margin-left:20em;
	margin-bottom:5em;
	position:relative;
	
}
div#limpiar_titulo{
	
	margin-bottom:2em;
}
form#alta-producto{
	background:#ccc;
margin:auto;
text-align:center;
width:60%
}
div.centrar-form-productos fieldset div#centrar-form-productos label{
	font-size:2em;

}
div.centrar-form-productos input[type="text"]{
	border-radius:0.4em;
		-moz-border-radius:0.4em;
		-webkit-border-radius:0.4em;
		-o-border-radius:0.4em;
		-ms-border-radius:0.4em;
	margin:0.7em;
}
div.centrar-form-productos input[type="text"]#material{
	margin-left:1em;
}
div.centrar-form-productos input[type="text"]#lamp_size{
	margin-left:0em;
}
div.centrar-form-productos input[type="text"]#watt{
	margin-left:2.3em;	
	margin-bottom:1em;
}
div.centrar-form-productos input[type="text"]#hrs{
	margin-left:2.3em;	
	margin-bottom:1em;
}
div.centrar-form-productos textarea#descripcion{
	margin-right:0em;
	margin-bottom:1em;
}
div.centrar-form-productos select#cod_categoria{
	margin-bottom:2em;
	margin-left:2em;
	width:14.3em;
}
div.centrar-form-productos select#cod_tipo_producto{
	margin-bottom:2em;
	
}

div.centrar-form-productos textarea#descripcion{
	margin-left:2em;
	vertical-align:top;
}
div.centrar-form-productos input[type="file"]#image1,div.centrar-form-productos input[type="file"]#image2{
	background:#fff;
	border:1px solid #212121;
	margin-top:1em;
	margin-bottom:1em;
}

</style>
<h2 id="titulo_alta_producto"> REGISTRO DE PRODUCTO NYX</h2>
<div id="limpiar_titulo" ></div>
<form id="alta-producto" method="post" enctype="multipart/form-data" name="alta-producto" action="<?php echo $_SERVER['PHP_SELF']; ?>"  >
<fieldset>
			<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <div class="centrar-form-productos">	
        <label for="material">Material	</label>
        <input type="text" id="material" class="cambio" name="material" placeholder="Ingrese sus nombre" value="material" />
        </div>
         <div class="centrar-form-productos">	
        <label for="item_nro">Item nro.	</label>
        <input type="text" id="item_nro" class="cambio" name="item_nro" placeholder="Ingrese sus item_nro" value="item_nro" />
        </div>
         <div class="centrar-form-productos">	
        <label for="lamp_size">Lamp size</label>
        <input type="text" id="lamp_size" class="cambio" name="lamp_size" placeholder="Ingrese sus lamp_size" value="lamp_size" />
        </div>
         <div class="centrar-form-productos">	
        <label for="hrs">HRS</label>
        <input type="text" id="hrs" class="cambio" name="hrs" placeholder="Ingrese sus lamp_size" value="hrs" />
        </div>
         <div class="centrar-form-productos">	
        <label for="watt">Watt	</label>
        <input type="text" id="watt" class="cambio" name="watt" placeholder="Ingrese sus nombre" value="watt" />
        </div>
         <div class="centrar-form-productos">	
        <label for="descripcion">Descripcion</label>
        <textarea id="descripcion" class="cambio" name="descripcion" rows="5" placeholder="Ingrese sus descripcion" ></textarea>
        </div>
        <div class="centrar-form-productos">
                        <label for="cod_categoria">Categoria</label>
                        <select id="cod_categoria" name="cod_categoria" class="cambio">
							<?php include("ccategoria.php");?>
                        </select>
		</div>
		<div class="centrar-form-productos">
                        <label for="cod_tipo_producto">Tipo producto</label>
                        <select id="cod_tipo_producto" name="cod_tipo_producto" class="cambio">
							<?php include("ctipo_producto.php");?>
                        </select>
		</div>
		<div class="centrar-form-productos">
		<label for="image1">Imagen1 </label>
		<input type="file" name="image1" id="image1"  size="20" value=""/>
		</div>
		<div class="centrar-form-productos">
		<label for="image2"> Imagen2</label>
		<input type="file" name="image2" id="image2"  size="20" value=""/>

		</div>
		<div class="centrar-form-productos">
			<input type="submit" name="btn_insertar_producto"  value="Insertar"/>
		</div>
</fieldset>
</form>

<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	if (isset($_POST['btn_insertar_producto'])){
			
								if ($_FILES['image1']['name'] != "" && $_FILES['image1']['size'] != 0)
								 { 
								
								 		 
									if(! move_uploaded_file ($_FILES['image1']['tmp_name'], "../img/imgproductos/".$_FILES['image1']['name'])) { 
									   echo "<h2>No se ha podido copiar el archivo 2</h2>n";  
									} 
									
								
								 }  
							 elseif ($_FILES['image1']['name'] != "" && $FILES['image1']['size'] == 0) 
									{ 
										echo "<h2>Tamano de archivo2 superado </h2>";
									}
									else
									{
										echo "<h2>No ha escogido un archivo 1 para descargar</h2>";
									} 
									
									
								if ($_FILES['image1']['name'] != "" && $_FILES['image1']['size'] != 0)
								 { 
								
								 		 
									if(! move_uploaded_file ($_FILES['image1']['tmp_name'], "../img/imgproductos/".$_FILES['image1']['name'])) { 
									   echo "<h2>No se ha podido copiar el archivo 2</h2>n";  
									} 
									
								
								 }  
							 elseif ($_FILES['image2']['name'] != "" && $FILES['image2']['size'] == 0) 
									{ 
										echo "<h2>Tamano de archivo2 superado </h2>";
									}
									else
									{
										echo "<h2>No ha escogido un archivo 1 para descargar</h2>";
									} 
								
}

$descripcion=$_POST["descripcion"];
$item_nro=$_POST["item_nro"];
$watt=$_POST["watt"];
$material=$_POST["material"];
$lamp_size=$_POST["lamp_size"];
$hrs=$_POST["hrs"];
$image1=$_FILES['image1']['name'];//"<img src='../img/imgproductos/".$_FILES['image1']['name']."' width='200'/>";
$image2=$_FILES['image2']['name'];
$cod_categoria=$_POST["cod_categoria"];
$cod_tipo_producto=$_POST["cod_tipo_producto"];


$consulta ="SELECT * FROM producto WHERE item_nro='$item_nro'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if($num_regs==0)
{ //echo "entro a num_Regs";   var_dump($num_regs);exit;
  $insertar="INSERT INTO producto (item_nro, watt, lamp_size, hrs, material,image1,image2, descripcion, cod_categoria, cod_tipo_producto)".
    "values ('$item_nro', '$watt','$lamp_size',$hrs,'$material','$image1','$image2','$descripcion',$cod_categoria,$cod_tipo_producto)";
   var_dump($insertar);//exit;

$ejecutar_consulta=$conexion->query(utf8_encode($insertar));

}
else{
 $mensaje="no se pudo dar de alta, ya existe $item_nro";
}

/*$insertar="INSERT INTO productos (cod_producto, item_nro, watt, chip, input_voltage, lamp_size, hrs, material, luminous, luminous_flux, cut_out, body_color, led_color, life_span, ip, guarantee, led_type_qty, frecuency_range, image1,image2 descripcion, cod_categoria, cod_tipo_producto) values ('','$item_nro', '$watt','$chip','$input_voltage','$lamp_size','$hrs','$material', 'luminous','lumin_flux', '$cut_out','$body_color','$led_color','','','','','','$image1','$image2','$descripcion',$cod_categoria','$cod_tipo_producto')";*/



if($ejecutar_consulta)
echo "<h3>Se registro exitósamentess</h3>";
else
echo "<h3>:( Lo sentimos, hubo algún error</h3>";
//mysqli_close($insertar);

?>
