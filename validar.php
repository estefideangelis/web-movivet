<?php
header('Content-Type: text/javascript; charset=UTF-8'); 
$nombreUsuario=$_POST['nombreUsuario'];
$password=$_POST['password'];

//conectar a la base de datos 

$conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet");



$consulta="SELECT * FROM usuario WHERE nombreUsuario='$nombreUsuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);
if($filas>0){
	header("location:reservar.html");
}else{
	echo "<script language='javascript'>
alert('Usuario o contraseña incorrecta');
window.location.href = 'http://MOVIVET.TK/sesion.html';
</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>