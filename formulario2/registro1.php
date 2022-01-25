<?php
// formulario de contacto papirrin,lo puedes mejorar? hazlo, no me enojo!!!!
	require 'class.phpmailer.php';
	// variables que almacenan los campos a enviar
	$nombre  = strip_tags($_POST['nombre']);
	$correo    = strip_tags($_POST['correo']);
       $mensaje = strip_tags($_POST['mensaje']);

	$destino = "brayam_martinez@benditaess.com"; // variable que almacena el correo al q se le envia el comentario
	$cuerpo = "Nombre:  ".$nombre."\r\n". 
	                    "Correo:  ".$correo."\r\n".
			      "Mensaje:  ".$mensaje;
	// variable que almacena todas las variables de los campos..

      $mail = new PHPMailer();

      $mail->CharSet = "UTF-8";   // variables que no puedes omitir
      $mail->From =   $asunto;   // variables que no puedes omitir
      $mail->AddAddress($destino);   // variables que no puedes omitir
      $mail->AddCC ($correo);   // variables que puedes omitir
      $mail->WordWrap = 55;   // variables que no puedes omitir
      $mail->MsgHTML= $cuerpo;   // variables que no puedes omitir
      $mail->Body = $cuerpo;   // variables que no puedes omitir
      
	if($_POST)
	{
		require 'funciones.php';								
		if (valnombre($nombre)=="") 
		{
			// variable que te informa sobre posible error
                     $mn = "<i>El nombre es requerido (minimo 3 letras)</i>";
              }
              elseif(valcorreo($correo)=="")
              {
              	// variable que te informa sobre posible error
                     $mc = "<i>EL correo es requerido y tiene que ser valido</i>";
              }       
		elseif(valmensaje($mensaje)=="")
		{
			// variable que te informa sobre posible error
			$mm= "<i>El mensaje es requerido</i>";
		}
		else 
		{
                     $mail->Send();
                     // variable que te informa que el comentario o mensaje si se envio
                     $mb= "<i>Tu comentario se ha enviado en breve te respondere</i>";
		}	      
       }
?>
		
