<?php
session_start();
$nombreUsuario=$_POST['nombreUsuario'];
$password=$_POST['password'];

//conectar a la base de datos 

$conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet");



$consulta="SELECT * FROM administrador WHERE nombreUsuario='$nombreUsuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);
if($filas>0){
	$_SESSION["usuario_login"] = "SI";
	echo "<script language='javascript'>
alert('Bienvenido administrador');
window.location.href = 'http://MOVIVET.TK/admin';
</script>";
}else{
	echo "<script language='javascript'>
alert('Usuario o contraseña incorrecta');
window.location.href = 'http://MOVIVET.TK/administrador.html';
</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>