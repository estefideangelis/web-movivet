<?php
//Comprobamos que se haya presionado el boton enviar
if(isset($_POST['submit'])){
//Guardamos en variables los datos enviados
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
 
$para = "estefideangelis@gmail.com";//Email al que se enviará
$asunto = "Contacto para su sitio web";//Puedes cambiar el asunto del mensaje desde aqui
//Este sería el cuerpo del mensaje
$message = "
<table border='0' cellspacing='3' cellpadding='2'>
<tr>
<td width='30%' align='left' bgcolor='#f0efef'><strong>Nombre:</strong></td>
<td width='80%' align='left'>$name</td>
</tr>
<tr>
<td align='left' bgcolor='#f0efef'><strong>E-mail:</strong></td>
<td align='left'>$email</td>
</tr>
<tr>
<td width='30%' align='left' bgcolor='#f0efef'><strong>Telefono:</strong></td>
<td width='70%' align='left'>$phone</td>
</tr>
<tr>
<td align='left' bgcolor='#f0efef'><strong>Comentario:</strong></td>
<td align='left'>$message</td>
</tr>
</table>
";
 
//Cabeceras del correo
$headers = "From: $name <$email>\r\n"; //Quien envia?
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
 
//Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos
if(mail($para, $asunto, $message, $headers)){
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://MOVIVET.TK/index.php';
</script>";
}else{
echo "Hubo un error en el envío inténtelo más tarde";
}
}

?>