<?php
	$unSalto="\r\n";
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$movil = $_POST['movil'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre. "Email: " .$email. "Movil: " .$movil.$_POST['mensaje'];

	if(mail('ismaeloc.iesap@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}	
 ?>