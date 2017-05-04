<?php
$para      = 'maasprilla35@misena.edu.co';
$titulo    = 'Correo de Contacto';
$mensaje   = $_POST['message'];
$cabeceras = 'From: '.$_POST['email'];

mail($para, $titulo, $mensaje, $cabeceras);
return true;
 ?>
