<style type="text/css">

#envoltorio_buscar_producto{
  text-align: center;
  width: 93%;
  margin-left: 70em;
}
#imagen_buscador{
	display:block;
	line-height:0.7em;
	margin-top:3.7em;
	margin-left:15%;
	text-align:left;

}
div.mostrar-descripcion-buscar-producto2 {
	background:#fff;
	color:#000;	
	border:0.1em solid #ccc;
	font-family: Times new roman;
	height:auto;
	line-height:1.3em;
	padding-top:1em;
	margin-left:8em;
	text-align:center;
	width:87%;
}
h2{
	margin-top:1.5em;

}
hr{
  box-shadow: 1px 5px 15px #ccc;
  height: 0.2em;
  padding-top: 1em;
  padding-bottom: 0.4em;
}
p{
	margin-top:-1em;
	margin-left:10em;
	position:absolute;
	width:68%;
}

@media(max-width:600px){
	div.mostrar-descripcion-buscar-producto2 {
		margin:0em;
		width:98%;
	}

}
</style>
<div id="envoltorio-buscar-producto">
<div class="mostrar-descripcion-buscar-producto2">

<?php
function conectarse()
{	
	$servidor="localhost";
	$usuario="nyxelect_marco";
	$password="Marco123";
	$bd="nyxelect_bd";
	
	$conectar=new MySQLi($servidor,$usuario,$password,$bd)or die("No se pudo conectar");
	return $conectar;
}
$conexion=conectarse();
include('../sql/conexion.php');
		$search='';
		if(isset($_POST['buscar_nyx'])){
				$search=$_POST['buscar_nyx'];
			}
			if(isset($_GET['buscar_nyx'])){
				$search=$_GET['buscar_nyx'];
			}
			$consulta="SELECT p.item_nro, p.descripcion, p.image1, c.nombre_categoria FROM producto p inner join categoria c on p.cod_categoria=c.cod_categoria WHERE descripcion LIKE '%".$search."%' OR item_nro LIKE '%".$search."%' ORDER BY item_nro ";
             //var_dump($consulta);
             			//echo $search ;exit;
			$resultado=$conexion->query($consulta);
			$registro=mysqli_fetch_assoc($resultado);
			$total=mysqli_num_rows($resultado);
			?><br/><h2>Resultados de la busquedas <?php echo  mysqli_num_rows($resultado);?> </h2> 
				
				<?php if($total>0 && $search!=''){?>
				
				<?php do{?>
				<?php
				 echo '<div id="contenedor_imagen_contenedor" ><img src="img/imgproductos/'.$registro['nombre_categoria'].'/'.$registro['image1'].'" id="imagen_buscador" width="200" width="120"/><br/></div>';
				// echo  str_replace($search,'<p><strong>'.$search.'</strong>',utf8_encode($registro['descripcion'])).'</p><hr>';
				 echo '<p>'.utf8_encode($registro['descripcion']).'</p><hr>';
				 ?>
				<?php } while($registro=mysqli_fetch_assoc($resultado));?>
				<?php }
				elseif($total>0 && $search='')
				echo '<h2>Ingresa un parámetro de búsqueda</h2><p>Ingresa palabras relacionada con tu busqueda</p>';
				else
				echo 'No se produjo resultados';
				
				?>
				<hr>
		</div>
		</div>





	
