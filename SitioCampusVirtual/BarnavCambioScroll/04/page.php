<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$mensaje = $_POST['mensaje'];
echo $nombre . ' ha dicho : <br/>' . $mensaje,
    $asunto,
    $correo,
    $estado,
    $mensaje;
mail('ismaeloc.iesap@gmail.com', $asunto, $correo, $estado, $mensaje);
?>

/*

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
echo $nombre . ' ha dicho : <br />' . $mensaje;
mail('ismaeloc.iesap@gmail.com', $asunto, $mensaje);



$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$mensaje = $_POST['mensaje'];
echo $nombre . ' ha dicho : <br />' . $mensaje;
mail('ismaeloc.iesap@gmail.com', $asunto, $correo, $estado, $mensaje);
*/