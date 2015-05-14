<?php
    include("Plantilla.php");

    $Contenido=new Plantilla("Correo");

	//header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Gracias por tu mensaje, te contactaremos lo mas pronto posible.'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $phone = @trim(stripslashes($_POST['phone'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = "site@serviciosam.com";
    $email_to = 'info@serviciosam.com';//replace with your email

        $Contenido->asigna_variables(array(
        "NOMBRE" => $name,
        "MENSAJE" => $message,
        "EMAIL" => $email,
        "TELEFONO" => $phone,
        "ASUNTO" => $subject
    ));

    $body = $Contenido->muestra();

    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabeceras .= 'From: Informacion <site@serviciosam.com>' . "\r\n";

    //mail("carzidco@gmail.com","Mensaje",$cuerpo,"From:Focasi@hogareszoe-canaan.org\r\nContent-type: text/html");
    mail("info@serviciosam.com", "Informacion", $body, $cabeceras);

    //$body = 'Name:' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    //mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    //foreach($_POST as $key => $val) 
    //    echo $val;
    
    /*$to      = 'carzidco@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: carzidco@hotmail.com' . "\r\n" .
    'Reply-To: carzidco@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);*/

    //echo json_encode($status);
    //die;

    echo "<script>alert('Gracias por tu mensaje!');window.location='http://www.serviciosam.com/contact-us.php'</script>";

    //echo "hola";
    //foreach($_POST as $key => $val) 
    //    echo $val;

?>