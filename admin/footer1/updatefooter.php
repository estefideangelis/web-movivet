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
	$nombreEmpresa=$_POST["nombreEmpresa"];
	$derechosES=$_POST["derechosES"];
	$derechosEN=$_POST["derechosEN"];
	$tienda=$_POST["tienda"];
	$lugar=$_POST["lugar"];
	$email=$_POST["email"];
	$terminos=$_POST["terminos"];
	$URL=$_POST["URL"];
	
	$consulta ="UPDATE footer SET nombreEmpresa='$nombreEmpresa',derechosES='$derechosES',derechosEN='$derechosEN',tienda='$tienda',lugar='$lugar',email='$email',terminos='$terminos',URL='$URL' WHERE footerID='$footerID'";
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
