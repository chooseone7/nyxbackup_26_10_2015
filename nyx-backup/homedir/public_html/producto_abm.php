<?php //require_once('Connections/conexion_nyxelectric.php'); //rnce('sql/conxion.php');
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include("session.php");
?>
<h2 id='usuario'>Bienvenido
<?php echo "".$_SESSION["usuario"]." !</h2>";?>
<?php

$footer_opcion=$_GET["footer_opcion"];
$op=$_GET["op"];
switch($op)
	{ case "alta_producto":
	   $contenidop="sql/altaproducto.php";
	   $titulo="Alta";
	   break;
	   case "actualizar_producto":
	   $contenidop="sql/actualizar_producto.php";
	   $titulo="Producto";
	   break;
	   case "eliminar_producto":
	   $contenidop="sql/eliminar_producto.php";
	   $titulo="eliminar_producto";
	   break;
	    default:
	   $contenidop="sql/mostrar_producto.php";
	   $titulo="Mostrar Producto";
	   break;}?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="en-US">
<![endif]-->                    
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="es">
<head>
<meta charset="utf-8">
<title><?php echo $titulo;?></title>

<meta name="description" content="Luces, pantallas, placas y griferia"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/><!-- hace que el ancho de nuestra pagina sea conforme al ancho del dispositivo, ya sea al 100%=1 u otro-->
 <link rel="shortcut icon" href="icon.ico" type="image/x-icon"></link>
<link rel="stylesheet" type="text/css" href="css/style_abm.css" ></link>

<script src="js/jquery.js" type="text/javascript"></script>


<script type="text/javascript"> 
$('#cambio_frm').blur(function() { $('#item_nro').load('actualizar_producto.php', {usuario:$('#idFormulario').val()}); }); </script>
</head>
<body>
		<header>
		</header>
		
			<a href="index.php">
			
			</a>	
       <?php //<img class="logo_producto" alt="Sitio de iluminaria fina y variada." src="img/nyxlogo.png" width="300px"/>echo "<button id='mostrar_todo_producto'> Mostrar producto</button>";?>
	 <div id="envoltorio_contenido_productoabm">
	 <?php //include_once($contenidop);?></div>

			

<?php 
include("sql/conexion.php");
?><table id="table_actualizar" border=1>
<?php
$consulta ="SELECT p.item_nro, p.watt, p.lamp_size, p.hrs, p.material,p.image1,p.image2, p.descripcion, p.cod_categoria ,c.nombre_categoria,p.cod_tipo_producto, tp.nombre_tipo_producto FROM producto p LEFT JOIN categoria c ON p.cod_categoria=c.cod_categoria LEFT JOIN tipo_producto tp on p.cod_tipo_producto=tp.cod_tipo_producto";
		   //var_dump($consulta);exit;
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;	


	  
	?><tr> 
		  		<th> Item nro </th> 
		  		<th> Descripcion </th> 
				<th> Watt </th> 
		  		<th> Lamp size </th> 
		  		<th> HRS </th> 
		  		<th> Material</th> 
		  		<th> Imagen1 </th> 
		  		<th> Imagen2 </th> 
		  		<th>Categoria </th> 
		  		<th>Tipo producto </th> 
		  		<th> Cambiar </th> 
		  		<th> Borrar </th> 
		  		 
		  	</tr> <?php
while($producto=$ejecutar_consulta->fetch_assoc()){
		//var_dump($producto);exit;
echo '<tr>';
echo '<form id="actualizar_producto" action="sql/actualizar_producto.php?item_nro='.$producto['item_nro'].'" method="POST">
 	<td><input type="text"  class="cambio" name="item_nro" value="'.$producto['item_nro'].'"></td>
	<td><input type="text"  class="cambio" name="descripcion" value="'.$producto["descripcion"].'"</td>
	<td><input type="text"  class="cambio" name="watt" value="'. $producto["watt"].'"</td>
	<td><input type="text"  class="cambio" name="lamp_size" value="'. $producto["lamp_size"].'"</td>
	<td><input type="text"  class="cambio" name="hrs" value="'. $producto["hrs"].'"</td>
	<td><input type="text"  class="cambio" name="material" value="'.$producto["material"].'"</td>
	<td><input type="text"  class="cambio" name="image1" value="'.$producto["image1"].'"</td>
	<td><input type="text"  class="cambio" name="image2" value="'.$producto["image2"].'"</td>
	<td><select id="cod_categoria"  class="cambio" name="cod_categoria" >
     <option value="'.$producto['cod_categoria'].'">'.$producto['nombre_categoria'].'</option>
	</select>
	</td>
	<td>
	 <select id="cod_tipo_producto" name="cod_tipo_producto">

   	  <option value="'.$producto['cod_tipo_producto'].'">'.$producto['nombre_tipo_producto'].'</option>
	 </select>
	</td>
		<td><input type="submit" id="submit_cambiar_btn" name="submit_cambiar_btn" value="Cambiar"/></td> </form>
		<td><a href="sql/eliminar_producto.php?item_nro='.$producto['item_nro'].'"><button>Eliminar</button></a></td>
	
	 </tr>';
}
//mysqli_close($conexion);

	function traerCategoria($id)
		{
			include("sql/conexion.php");
		//var_dump($id." hola");exit;
		$consulta_cat="SELECT * FROM  categoria";// WHERE cod_categoria=".$id." ORDER BY cod_categoria";
		$ejecutar_consulta_cat=$conexion->query($consulta_cat);
		//var_dump($ejecutar_consulta_cat."asdfas");exit;
		while($registro=$ejecutar_consulta_cat->fetch_assoc()){

		$nombre_categoria=utf8_encode($registro["nombre_categoria"]);
		$cod_categoria=utf8_encode($registro["cod_categoria"]);
		echo "<option value='".$cod_categoria."'>".$nombre_categoria."</option>";
		}
		return $nombre_categoria;
	
		}
?>
  
<h2 id="titulo_alta_producto"> REGISTRO DE PRODUCTO NYX</h2>
<div id="limpiar_titulo" ></div>
<h3><a id="salir_session" href="salir.php">Salir</a></h3>
<h3><a id="inicio" href="index.php">Volver a Inicio</a></h3>
<div id="envoltorio_alta_producto">
<form id="alta-producto"  name="alta-producto" method="post" enctype="multipart/form-data"  action="sql/altaproducto.php"  >
				<fieldset>
							<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
						<div class="centrar-form-productos">	
						<label for="material">Material	</label>
						<input type="text" id="material" name="material" placeholder="Ingrese sus nombre" value="" />
						</div>
						 <div class="centrar-form-productos">	
						<label for="item_nro">Item nro.	</label>
						<input type="text" id="item_nro" name="item_nro" placeholder="Ingrese sus item_nro" value="" />
						</div>
						 <div class="centrar-form-productos">	
						<label for="lamp_size">Lamp size</label>
						<input type="text" id="lamp_size" name="lamp_size" placeholder="Ingrese sus lamp_size" value="" />
						</div>
						 <div class="centrar-form-productos">	
						<label for="hrs">HRS</label>
						<input type="text" id="hrs" name="hrs" placeholder="Ingrese sus lamp_size" value="" />
						</div>
						 <div class="centrar-form-productos">	
						<label for="watt">Watt	</label>
						<input type="text" id="watt" name="watt" placeholder="Ingrese sus nombre" value="" />
						</div>
						 <div class="centrar-form-productos">	
						<label for="descripcion">Descripcion</label>
						<textarea id="descripcion" name="descripcion" rows="5" placeholder="Ingrese sus descripcion" ></textarea>
						</div>
						<div class="centrar-form-productos">
										<label for="cod_categoria">Categoria</label>
										<select id="cod_categoria" name="cod_categoria">
											<?php include_once("ccategoria.php");?>
										</select>
						</div>
						<div class="centrar-form-productos">
										<label for="cod_tipo_producto">Tipo producto</label>
										<select id="cod_tipo_producto" name="cod_tipo_producto">
											<?php include_once("ctipo_producto.php");?>
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
</div>


		   
			