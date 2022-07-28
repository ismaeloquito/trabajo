<?php 
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
    $estado = $_POST['estado'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];


	if(mail('ismaeloc.iesap@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>