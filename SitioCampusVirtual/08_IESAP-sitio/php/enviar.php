<?php
$destino = 'ismaeloc.iesap@gmail.com';
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$mensaje = $_POST['mensaje'];
$contenido =
    'Nombre :' .
    $nombre .
    "\nApellidos :" .
    $apellidos .
    "\nCorreo :" .
    $correo .
    "\nEstado :" .
    $estado .
    "\nmensaje :" .
    $mensaje;
mail($destino, 'Contacto', $contenido);
header('Location:../enviado.html');
?>