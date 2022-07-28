<?php
$nombreErr = $apellidosErr = $correoErr = $estadoErr = '';
$nombre = $apellidos = $correo = $estado = '';
$destino = 'ismaeloc.iesap@gmail.com';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['nombre'])) {
        $nameErr = 'Es necesario que nos des tu nombre';
    } else {
        $name = test_input($_POST['name']);
    }
    if (empty($_POST['apellidos'])) {
        $apellidosErr = 'Es necesario que nos des tus apellidos';
    } else {
        $apellidos = test_input($_POST['apellidos']);
    }
    if (empty($_POST['correo'])) {
        $correoErr = 'Es necesario que nos des tu correo electrónico';
    } else {
        $correo = test_input($_POST['correo']);
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'El formato no es correcto';
        }
    }
}
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