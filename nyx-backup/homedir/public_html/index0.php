<?php //require_once('Connections/conexion_nyxelectric.php'); //rnce('sql/conxion.php');
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
$footer_opcion=$_GET["footer_opcion"];
$op=$_GET["op"];
switch($op)
	{ case "home":
	   $contenido="home.php";
	   $titulo="Home";
	   break;
	   case "productos":
	   $contenido="productos.php";
	   $titulo="Producto";
	   break;
	   case "clientes":
	   $contenido="clientes.php";
	   $titulo="Cliente";
	   break;
	   case "novedades":
	   $contenido="novedades.php";
	   $titulo="Novedades";
	   break;
	   case "contactanos":
	   $contenido="contactanos.php";
	   $titulo="Contactanos";
	   break;
	   case "exteriores":
	   $contenido="exteriores.php";
	   $titulo="exteriores";
	   break;
	   case "interiores":
	   $contenido="interiores.php";
	   $titulo="interiores";
	   break;
	   case "griferia":
	   $contenido="griferia.php";
	   $titulo="griferia";
	   break;
	   case "placas":
	   $contenido="placas.php";
	   $titulo="placas";
	   break;
   	   case "descripcion_producto":
	   $contenido="descripcion_producto.php";
	   $titulo="Descripcion producto";
	   break;
	   case "cambios":
	   $contenido="sql/altaproducto.php";
	   $titulo="Alta baja modificaciones producto";
	   break;
	     case "buscador":
	   $contenido="sql/buscador.php";
	   $titulo="Buscador";
	   break;
	   default:
	   $contenido="home.php";
	   $titulo="Home";
	   break;}?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="es-BO">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="es-BO">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="es-BO">
<![endif]-->                    
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="es">
<head>
<meta content="text/html; charset=utf-8" http-equiv="content-type"></meta>


<title><?php echo $titulo;?></title>
<base href="http://nyxelectric.com/index.php?op=buscador&buscar_nyx=luces%20led">
<link href="http://nyxelectric.com/index.php?op=buscador&buscar_nyx=luces%20led"></link>
<meta name="description" content="Nyx Electric Bolivia, Luces led, Iluminaria fina, de larga duracion, Luces led para interiores y exteriores, desde 1 hasta 3 años de garantía, variedad de luminaria led">
<meta name="keywords" content="Luces led, Luces led, luminacion led, focos led, Iluminacion LED, luminaria de calidad led, luminaria fina, reflectores led, paneles led"></meta>

<meta content="http://www.nyxelectric.com/" property="og:url">
<meta content="ILUMINACION - Nyx Electric" property="og:title">


<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--El uso correcto del meta tag viewport Lo único que tenemos que hacer al poner el meta viewport en nuestro código es eliminar maximum-scale y user-scalable.Código :
<meta name="viewport" content="width=device-width, initial-scale=1"> hace que el ancho de nuestra pagina sea conforme al ancho del dispositivo, ya sea al 100%=1 u otro Por defecto, user-scalable tiene el valor de yes, es decir, el zoom está activado. Si no definen maximum-scale, el zoom máximo será el determinado por el navegador, por lo que tampoco necesitamos indicarlo.

Espero que tengan en cuenta este pequeño tip de ahora en adelante. Por muy insignificante que pueda parecer, los detalles hacen la diferencia y hacen felices a los usuarios.s-->
 <link rel="shortcut icon" href="icon.ico" type="image/x-icon"></link>
<link rel="stylesheet" href="css/flexslider.css" />
<link rel ="stylesheet" type="text/css" href="css/style.css"/>
<link rel ="stylesheet" type="text/css" href="css/style_abm.css"/>
<link rel="stylesheet" media="(min-width: 1200px)" href="css/pantallagrande.css" />
 <link href="css/nyx.carousel.css" rel="stylesheet">
 <!--<link href="css/nyx.theme.css" rel="stylesheet">  <link href="css/nyx.transitions.css" rel="stylesheet">
-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>!window.jQuery &&document.write("<script src='js/jquery.min.js'><\/script>");</script>-->

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
<script src="js/jquery.elevatezoom.min.js" type="text/javascript"></script>
<script src="js/ajax.js" type="text/javascript"></script>
<script src="js/owl.carousel.js" type="text/javascript"></script>
<script>
	$(window).load(function(){
		$(".flexslider").flexslider();
	});
</script>
<script type="text/javascript">
	$(document).ready(function () {
	$("#img_01").elevateZoom({
		lensShape : "round",
		lensSize : 2
		}); 
	
}); 
	</script>
	<!--[if lt IE 7]> <html class="no-js ie6 ie" lang="en"> <![endif]--><!--[if IE 7]> <html class="no-js ie7 ie" lang="en"> <![endif]--><!--[if IE 8]> <html class="no-js ie8 ie" lang="en"> <![endif]--><!--[if gt IE 8]><html xmlns="http://www.w3.org/1999/xhtml">
   <![endif]-->
<!-- [if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<! [endif]-->
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
	<script>
	window.onload=function()
	{
		
		var lista=document.getElementById("submit_buscar");
		var buscador=document.getElementById("buscar_nyx");
		lista.onclick= seleccionarContacto;

		function seleccionarContacto(){
			
			window.location= "index.php?op=buscador&buscar_nyx="+buscador.value;
		}
	}
	</script>


<body>
		<header>
			<?php //include("visitas.php");?>
			<h1 id="logo">Nyx Electric</h1>
			<a href="index.php"></a>	
			
			<h3 id="info"> Telefonos:</h3>
			<p id="info">Oficina 3305197 <br/>
			Celular 708-51402, 768-91711</p><br/>
		    </p>
		</header>
	 <div id="primerdiv">
                      <nav>
                    	<ul class="links">
                      	 <li class="first"><a href="?op=home">Inicio</a></li>
                         <li><a href="?op=productos">Productos</a>
                            <ul>
                              <li><a href="?op=exteriores">Exteriores</a>
                          		<ul class="submenu2">
                          			<li>
                          				<a href='?op=productos&tipo_producto=reflector'>Reflectores</a>
                          			</li>
                          			<li>
                          				<a href='?op=productos&item=tipo_producto=piscina'>Piscina</a>
                          			</li>
                          			<li>
                          				<a href='?op=productos&item=tipo_producto=spot_piso'>Spot de piso</a>
                          			</li>
                          			<li>
                          				<a>Patios</a>
                          			</li>
                          				
                          		</ul>
                          </li>
                          <li><a href="?op=interiores">Interiores</a>
                          		<ul class="submenu2">
                          			<li>
                          				<a href='?op=productos&tipo_producto=apliques_interiores'>Apliques Interiores</a>
                          			</li>
                          			<li>
                          				<a href='?op=productos&item=tipo_producto'>Lamparas de colgar</a>
                          			</li>
                          			<li>
                          				<a>Patios</a>
                          			</li>
                          				
                          		</ul>	
                          </li>
						  <li><a href="?op=placas">Placas</a></li>
						  <li><a href="?op=griferia">Griferia</a></li>
                        </ul>
                      </li>
                      <li><a href="?op=clientes">Clientes</a></li>
                      <li><a href="?op=novedades">Novedades</a></li>
                      <li><a href="?op=contactanos">Contactos</a></li>
		<li class="nav-li-last-buscador">              
              <!--  SECTOR BUSCADOR sql/buscador.php target="_blank"  sql/buscador.php-->
				</li>
         	 <div class="formulario_nyx_buscador">
              	    <form id="buscador_nyx" name="buscador_nyx"  method="post" action="">
				 	 <input type="text" name="buscar_nyx" id="buscar_nyx" lclass="mi_placeholder" placeholder=" Ingrese su palabra" value=""></input>
			      	 <input class="submit_buscar" id="submit_buscar" type="submit" value="Buscar&nbsp;"></input>
     		 	   </form>
           		 <!-- window.open('?op=buscador')-->
                 </div>    
                 
             </ul>
           </nav>
        </div>
		<div id="barra-fija">
			<h4>Aqui ira algo fijo</h4>
			
		</div>
	<!-- -->
    
	 <div><?php include_once($contenido);?></div>
	 
	 
			<div id="menu2">
      			 <nav>
                    <ul class="links">
                      <li class="first"><a href="?op=home">Inicio</a></li>
                      <li><a href="?op=productos">Productos</a>
                        <ul>
                          <li><a  href="?op=exteriores">Exterioress</a></li>
                          <li><a href="?op=interiores">Interiores</a></li>
						  <li><a href="?op=placas">Placas</a></li>
						  <li><a href="?op=griferia">Griferia</a></li>
                        </ul>
                      </li>
                      <li><a href="?op=clientes">Clientes</a></li>
                      <li><a href="?op=novedades">Novedades</a></li>
                      <li><a href="?op=contactanos">Contactos</a></li>
                	<!--<li class="last"><a href="contactos.php">Contactos</a></li> -->
         	     </ul>
            
                  
        </nav>
			</div>
			<!--<aside>
			<div ="lateral">
			
			
			</div>
			</aside> -->

			 <?php     
	      if(isset($_POST["footer_opcion"]) && $_POST["footer_opcion"]=="hay pie"){
				echo "no hay pie";
        }else{?>
			<footer><p>Derechos reservados 2015</p></footer>
			<?php }