<?php

include("Plantilla.php");

//al Pasar como parametro holaMundo, asumimos que en la carpeta plantillas existe un archivo de nombre holaMundo.tpl
$Contenido=new Plantilla("Correo");

$nombre = $HTTP_POST_VARS["name"];
$email = $HTTP_POST_VARS["email"];
$telefono = $HTTP_POST_VARS["phone"];
$mensaje = $HTTP_POST_VARS["message"];

//$cuerpo = "Nombre: ".$Nombre."\nMensaje".$mensaje;

$Contenido->asigna_variables(array(
        "NOMBRE" => $nombre,
        "MENSAJE" => $mensaje,
        "EMAIL" => $email,
        "TELEFONO" => $telefono,
        "ASUNTO" => "Mensaje de contacto"
));

$cuerpo = $Contenido->muestra();

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: Informacion <contactenos@focasi.org>' . "\r\n";

//mail("carzidco@gmail.com","Mensaje",$cuerpo,"From:Focasi@hogareszoe-canaan.org\r\nContent-type: text/html");
mail("carzidco@gmail.com", "Informacion contactenos Focasi", $cuerpo, $cabeceras);
echo "<script>alert('Gracias por tu mensaje!');window.location='http://www.focasi.org/contactenos.php'</script>";

?>