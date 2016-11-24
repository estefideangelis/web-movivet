<?php
//1.Que el soft de PHP se indentifique ante MySql


if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){



	
//Recibir los datos y almacenarlos en variables
$nombreUsuario = $_POST["nombreUsuario"];
$password = $_POST["password"];
$email = $_POST["email"];
$nombre = $_POST["nombre"];





//Consulta
$insertar = "INSERT INTO usuario(nombreUsuario,password,email,nombre) VALUES ('$nombreUsuario','$password','$email','$nombre')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE nombreUsuario='$nombreUsuario'");
if(mysqli_num_rows($verificar_usuario)>0){
	echo "<script language='javascript'>
alert('El usuario ya existe');
window.location.href = 'http://MOVIVET.TK/registro.html';
</script>";
	exit;
}


//Ejecutar consulta
$resultado= mysqli_query($conexion,$insertar);

if(!$resultado) {
	echo "<script language='javascript'>
alert('Falló el envio');
window.location.href = 'http://MOVIVET.TK/registro.html';
</script>";
}
else{
	echo "<script language='javascript'>
alert('Gracias por registrarse');
window.location.href = 'http://MOVIVET.TK/sesion.html';
</script>";
}

//cerrar conexion 
mysqli_close($conexion);

}
?>
