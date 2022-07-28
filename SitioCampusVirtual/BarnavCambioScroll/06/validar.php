<?php
if (isset($_POST['submit'])) {
    if (empty($nombre)) {
        echo "<p class='error'>*** Este campo es obligatorio ***</p>";
    }else{
        if(strlen($nombre)>20){
            echo "<p class='error'>*** Tu nombre es muy largo ***</p>";
        }
    }
    if (empty($apellidos)) {
        echo "<p class='error'>*** Este campo es obligatorio ***</p>";
    }else{
        if(strlen($nombre)>20){
            echo "<p class='error'>*** Tu nombre es muy largo ***</p>";
        }
    if (empty($correo)) {
        echo "<p class='error'>*** Este campo es obligatorio ***</p>";
    }else{
        if(!filter_var($correo, FILERT_VALIDATE_EMAIL))
    }
    if (empty($mensaje)) {
        echo "<p class='error'>*** El formato de correo es incorrecto ***</p>";
    }
}
}
}
}
}