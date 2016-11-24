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
	$footerID=$_POST["footerID"];
	$textoES=$_POST["textoES"];
	$textoEN=$_POST["textoEN"];
	$URL=$_POST["URL"];
	
	$consulta ="UPDATE footer SET textoES='$textoES',textoEN='$textoEN',URL='$URL' WHERE footerID='$footerID'";
//3.Ejecutr esa consulta en la base
	if(mysqli_query($conexion,$consulta)){
	echo"<p>Se ha modificado con éxito.</p>";
echo"<ul><li><a href='footer.php'>Volver</a> </li></ul>";

	}else{
		echo"<p>No se pudo modificar.</p>";
			
		echo"<ul><li><a href='footer.php'>Volver </a> </li></ul>";

	}
}
?>
</body>
</html>
