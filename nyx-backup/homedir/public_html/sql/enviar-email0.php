<?php
include("conexion.php");
$nombre=$_POST["nombre"];
$email=$_POST["email"];
//$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$mensaje=$_POST["mensaje"];
$compania=$_POST["compania"];
$ciudad=$_POST["nombre_ciudad"];
$cabeceras="MIME-Version:1.0\r\n";
$cabeceras.="Content-type: text/html; charset=iso-8859-1\r\n";
$cabeceras .="From:$nombre \r\n";


include("class.phpmailer.php");
include("class.smtp.php");

	$mail=new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth=true;//autentificacion en el SMTP
	$mail->SMTPSecure="ssl";//security socket layer
	$mail->Host="mail.nyxelectric.com";
	$mail->SMTPDebug =1;
	$mail->Port=26;// intente con 25 y nada  //puerto seguro del servidor SMTP DE gmail
	$mail->From="$email";
	$mail->AddAddress($email);
	$mail->Username="nyxelectric@nyxelectric.com";
	$mail->Password="nyxelectric2015";
	$SPLangDir ="phpmailer/language/";
	$mail->Subject="primer prueba.aa";
	$mail->Body=$mensaje." ".$compania." ".$ciudad .".";
	$mail->WordWrap=50;
	$mail->MsgHTML($mensaje);//cuerpo con formato html
	if($mail->Send()){
		$respuesta="ok fue enviado";
	}else
	{
		$respuesta ="error: ".$mail->ErrorInfo;
	}
	//header("Location:../contactanos.php?respuesta=$respuesta");//eacho $cabeceras." ".$email." ".$telefono." ".$mensaje." ".$respuesta;


 header("Location:../index.php?op=contactanos&respuesta=$respuesta");
?>