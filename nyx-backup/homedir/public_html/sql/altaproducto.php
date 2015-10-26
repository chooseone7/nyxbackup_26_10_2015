<?php
include("conexion.php");
if (isset($_POST['btn_insertar_producto'])){
									/*SEGUNDA IMAGEN*/
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
		
		/*SEGUNDA IMAGEN*/
	if ($_FILES['image2']['name'] != "" && $_FILES['image2']['size'] != 0)
	 { 
	
	 		 
		if(! move_uploaded_file ($_FILES['image2']['tmp_name'], "../img/imgproductos/".$_FILES['image2']['name'])) { 
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
								/*FIN SEGUNDA IMAGEN*/
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
	{
  $insertar="INSERT INTO producto (item_nro, watt, lamp_size, hrs, material,image1,image2, descripcion, cod_categoria, cod_tipo_producto)".
    "values ('$item_nro', '$watt','$lamp_size',$hrs,'$material','$image1','$image2','$descripcion', $cod_categoria, $cod_tipo_producto)";
   	$ejecutar_consulta=$conexion->query(utf8_encode($insertar));
	//var_dump($insertar);exit;
		
	if($ejecutar_consulta)
		{
			sleep(1);
			echo "<h3>Se registro exit&oacute;samente</h3>";
		}
		else
		echo "<h3>:( Lo sentimos, hubo alg&uacute;n error</h3>";

	}
	else{
	 $mensaje="no se pudo dar de alta, ya existe $item_nro";
	}?>
<script>
window.location="../producto_abm.php";
</script>
