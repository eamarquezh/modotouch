<?php
$remitente = $_POST['email'];
$destinatario = 'ericmarquez@modotouch.com'; // en esta línea va el mail del destinatario.
$asunto = 'Contacto'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Mensaje: " . $_POST["comentario"] . "\r\n"; 

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['email']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'gracias.html'; //se debe crear un html que confirma el envío
}
?>