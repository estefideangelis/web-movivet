<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$para = 'ESTEFIDEANGELIS@GMAIL.COM';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $name\n E-Mail: $email\n Mensaje:\n $message"; 

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://MOVIVET.TK';
</script>";
} else {
echo 'Falló el envio';
}
}
?>