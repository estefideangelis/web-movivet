<html>
<head>
	<meta charset="utf-8">
	<title>Administrador</title>
	<link href="diseño.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	<?php
	
//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$galeriaID=$_POST["galeriaID"];
	$textoES=$_POST["textoES"];
	$textoEN=$_POST["textoEN"];
	$URL=$_POST["URL"];
	$altES=$_POST["altES"];
	$altEN=$_POST["altEN"];
	
	$consulta ="UPDATE galeria SET textoES='$textoES',textoEN='$textoEN',URL='$URL',altES='$altES',altEN='$altEN' WHERE galeriaID='$galeriaID'";
//3.Ejecutr esa consulta en la base
	if(mysqli_query($conexion,$consulta)){
	echo"<p>Se ha modificado con éxito.</p>";
echo"<ul><li><a href='galeria.php'>Volver</a> </li></ul>";

	}else{
		echo"<p>No se pudo modificar.</p>";
			
		echo"<ul><li><a href='galeria.php'>Volver </a> </li></ul>";

	}
}
?>
</body>
</html>