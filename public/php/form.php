<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if ($name != ''){

$para      = 'diegorodriguez93@hotmail.com';
$titulo    = 'mensaje desde Renoca';
$mensaje   = 'La persona de nombre: '.$name.' y email: '.$email.' le ha escrito: '.$msg;


$mail = mail($para, $titulo, $mensaje, 'From: info@renoca.ml');

    echo '<div class="bg-success text-center"><h5 class="text-light">Gracias '.$name.' por su mensaje!<br>
    Le responderé a la brevedad</h5>
    </div>';

 if(!$mail){
    echo '<div class="bg-danger text-center"><h5 class="text-light">No se ha podido enviar el mensaje</h5></div>';
 }

} else {
    echo '<div class="bg-danger text-center"><h5 class="text-light">No se ha podido enviar el mensaje</h5></div>';
}


?>