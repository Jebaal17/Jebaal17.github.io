<?php
if(isset($_POST['email'])) {

$email_to = "jebaal1997@gmail.com";
$email_subject = $_POST['subject'];

if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['subject']) ||
!isset($_POST['message'])) {

die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Asunto: " . $_POST['subject'] . "\n";
$email_message .= "Mensaje: " . $_POST['message'] . "\n\n";


$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

}
?>