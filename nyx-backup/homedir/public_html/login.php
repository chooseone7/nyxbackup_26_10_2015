<html lang="es">
<head>
<meta charset="utf-8">
<title>Login</title>

<meta name="description" content="Luces, pantallas, placas y griferia"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/><!-- hace que el ancho de nuestra pagina sea conforme al ancho del dispositivo, ya sea al 100%=1 u otro-->
 <link rel="shortcut icon" href="icon.ico" type="image/x-icon"></link>
<link rel ="stylesheet" type="text/css" href="css/style.css"/>

<style type="text/css">

form#login{
	background:#ccc;
	border-radius:0.8em;
	color:#212121;
	margin:2em auto;
	padding:2em;

	text-align:center;
	width:30%;

}

form#login #nombre_usuario_txt{
	margin-top:2em;
	margin-left:2em;
	border-radius:0.4em;
	height:2em;
}
form#login #contrasenia_txt{
	margin-top:2em;
	border-radius:0.4em;
	height:2em;
}
form#login #submit_login
{	border-radius:0.4em;
	-moz-border-radius:0.4em;
	-o-border-radius:0.4em;
	-webkit-border-radius:0.4em;
	height:2em;
	margin-top:2em;
	margin-left:2em;
}
</style>
</head>

<body>

<form id="login"  name="login" method="post" enctype="application/x-www-form-urlencoded"  action="control.php"  >
<?php
error_reporting( E_ALL ^ E_NOTICE ^ E_WARNING);
 if($_GET["error"]=="si"){
 	 	echo "<span>Verifica tus DATOS</span>";
 }else
 {
 	echo "Introduce tus datos";
 }
?>
				<fieldset>
							
						<div class="centrar-form-productos">	
						<input type="hidden" id="cod_usuario_hdn" class="cambio" name="nombre_usuario_txt" placeholder="Ingrese sus nombre" />
						<label for="material"><b>Usuario: </b></label>
						<input type="text" id="nombre_usuario_txt" class="cambio" name="nombre_usuario_txt" placeholder="Ingrese su usuario" />
						</div>
						<div>
						<label for="material"><b>Contrasenia: </b>	</label>
						<input type="password" id="contrasenia_txt" class="cambio" name="contrasenia_txt" placeholder="Ingrese su contrasena" />
						</div>

							<div>

							<input type="submit" id="submit_login" class="cambio" name="contrasenia" value="Ingresar" placeholder="Ingrese su contrasena" />
													
							</div>
							

</body>
</html>
<?php
?>