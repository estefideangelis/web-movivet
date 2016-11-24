<html>
<head>
	<meta charset="utf-8">
	<title>Baja usuario</title>
   <link href="diseño.css" rel="stylesheet" type="text/css">
	
</head>
<body>

    
	<?php
	$codaborrar= $_GET["codaborrar"];

//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){


//2.Preparar la consulta SQL
	$consulta ="DELETE FROM usuario WHERE IDusuario='$codaborrar'";
//3.Ejecutr esa consulta en la base
	if(mysqli_query($conexion,$consulta)){
	echo"<p>Se ha eliminado con éxito.</p>";

	}else{
		echo"<p>No se pudo eliminar.</p>";
			
	

	}
}
?>
</body>
</html>
