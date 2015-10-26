<?php
$nombre=$_POST["nombre"];
$subject=$_POST["mensaje"];
$from=$_POST["email"];
$telefono=$_POST["telefono"];
$mensaje=$_POST["mensaje"];
$compania=$_POST["compania"];
$ciudad=$_POST["nombre_ciudad"];
$to="nyxelectric@nyxelectric.com ";
$cabeceras='MIME-Version:1.0'. "\r\n";
$cabeceras.='Content-type: text/html; charset=iso-8859-1' . "\r\n ";
$cabeceras.='To:'.$to. "\r\n";
$cabeceras.='From: '.$from. "\r\n";
$cabeceras.='Cc: '.$from. "\r\n";
$mensaje.=' <html><head></head><p>Telefono:'.$telefono.'</p><p> Ciudad:'  .$ciudad. '</p><p>Compa&ntilde;ia:'.$compania.'</p></html>';

//$cabeceras =$from." " .$nombre. ", ".$telefono." ,";//.$ciudad
 //echo $cabeceras;//$from . " Asunto ".$subject ." ". $mensaje . " Telefono: ". $." ,"telefono.", ".$cabeceras; exit; 
if(mail($to,$subject,$mensaje,$cabeceras)){
	$respuesta="Correo enviado Correctamente!";}
	else{
	$respuesta="Ocurrio en error, verifique sus datos!";
	}
	/*
include_once("../phpmailer/class.phpmailer.php");
include_once("../phpmailer/class.smtp.php");

	$mail=new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth=true;//autentificacion en el SMTP
	$mail->SMTPSecure="ssl";//security socket layer
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;//puerto seguro del servidor SMTP DE gmail
	$mail->From="$de";//$nombre;//remitente
	$mail->AddAddress($email);
	$mail->Username="marcjav7@gmail.com";
	$mail->Password="chooseone77";
	$SPLangDir ="phpmailer/language/";
	$mail->Subject=$compania;
	$mail->Body=$mensaje;
	$mail->WordWrap=50;//Nro. de Columnas
	$mail->MsgHTML($mensaje);//cuerpo con formato html
	if($mail->Send()){
		$respuesta="ok fue enviado";
	}else
	{
		$respuesta.="error: ".$mail->ErrorInfo;
	}*/
	header("Location:../?op=contactanos&respuesta=$respuesta");
?>